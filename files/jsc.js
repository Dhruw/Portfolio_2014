$(document).ready(function() {

    $("#m_personal").click(
            function() {
				fadeAll();
                $("#personal").fadeIn(1000);
            }
        );

    $("#m_professional").click(
            function() {
				fadeAll();
                $("#professional").fadeIn(1000);
            }
        );

    $("#m_arts").click(
            function() {
				fadeAll();
                $("#arts").fadeIn(1000);
            }
        );

    $("#m_music").click(
            function() {
				fadeAll();
                $("#music").fadeIn(1000);
            }
        );

    $("#m_home").click(
            function() {
				fadeAll();
                $("#home").fadeIn(1000);
            }
        );

/*
    $("#m_").click(
            function() {
				fadeAll();
                $("#").fadeIn(1000);
            }
        );
*/

});

function fadeAll()
{
	$("#home").fadeOut(400);
	$("#personal").fadeOut(400);
	$("#professional").fadeOut(400);
	$("#arts").fadeOut(400);
	$("#music").fadeOut(400);
}