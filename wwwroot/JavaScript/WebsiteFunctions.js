// Script to open and close the sidenav
(function($)
{
    //  These functions will run once the website is initially loaded
    $(document).ready(function()
    {

        //  Hide elements
        // $("#mainDonorRegistrationForm").hide();
        // $("#mainDonorsTable").hide();
        // $("#mainLoginForm").hide();

        //  Display elements
        // document.getElementById(name).style.display = "block";

    });

    function w3_show_sidebar(name)
    {
        //  Hide sidebar elements
        $("#sidebarHome").hide();
        $("#sidebarHome").hide();
        $("#sidebarLearn").hide();
        $("#sidebarGetInvolved").hide();

        //  Display element
        // $(name).css("display","block");
    }

    //  If the login button was clicked...
    $("#buttonLogin").click
    (
        function display_login(name)
        {
            //  Hide elements
            $("#mainDonorRegistrationForm").hide();
            $("#mainDonorsTable").hide();
            $("#mainLoginForm").hide();

            //  Display elements
            $("#mainLoginForm").show();
            // $(name).css("display","block");
        }
    );

    //  If the register button was clicked...
    $("#buttonRegister").click
    (
        function display_login(name)
        {
            //  Hide elements
            $("#mainDonorRegistrationForm").hide();
            $("#mainDonorsTable").hide();
            $("#mainLoginForm").hide();

            //  Display elements
            // $("#mainLoginForm").show();
            // $(name).css("display","block");
        }
    );

})(jQuery);

