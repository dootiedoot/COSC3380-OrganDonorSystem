'use strict';
var path = require('path');

if (process.argv.length < 8) {
    console.error('Usage: node cred.js MONACO_SERVER_ROOT MONACO_SERVER_HOOK MONACO_WORKSPACE MONACO_REQUEST_GUID MONACO_GIT_COMMAND MONACO_GIT_CONTEXT');
    process.exit(1);

}
var serverRoot = process.argv[2];
var hook = process.argv[3];
var scope = {};

process.argv[7].split(';').filter(function (l) { return !!l; }).forEach(function (line) {
    var components = line.split('=');
    scope[components[0]] = components[1];
});

require(path.join(serverRoot, 'start')).load({
	relativeModulePath: path.join(serverRoot, 'lib', 'eventBus')
}, function (eventBus) {
	eventBus.connect(hook, function (err, bus) {
	    if (err) {
	        process.exit(1);
	    }
	    var guid = process.argv[5];
	    bus.on('credentials:response', function (data) {
	        if (data.guid !== guid) {
	            return;
	        }
	        bus.disconnect();
	        if (data.credentials) {
	            console.log('username=' + data.credentials.username);
	            console.log('password=' + data.credentials.password);
	        }
	    });
	    bus.emit('credentials:request', {
	        workspace: process.argv[4],
	        guid: guid,
	        gitCommand: process.argv[6],
	        command: process.argv[8],
	        scope: scope
	    });
	});
});
