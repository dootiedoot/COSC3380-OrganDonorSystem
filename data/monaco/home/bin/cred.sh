#!/bin/sh

# In an unexpected turn of events, when we run Monaco in the cloud, 
# $HOME/bin/cred.js behaves strangely when attempting to read from stdin.

# This script merely converts the credential context from a multiline
# format to a semi-colon separated one. It then passes that to
# $HOME/bin/cred.js as an argument. Thus, no need for $HOME/bin/cred.js
# to read from stdin.

MONACO_GIT_CONTEXT=""
while read line; do
	MONACO_GIT_CONTEXT="$MONACO_GIT_CONTEXT$line;"
done

"$NODE" "$HOME/bin/cred.js" "$MONACO_SERVER_ROOT" "$MONACO_SERVER_HOOK" "$MONACO_WORKSPACE" "$MONACO_REQUEST_GUID" "$MONACO_GIT_COMMAND" "$MONACO_GIT_CONTEXT" $*
