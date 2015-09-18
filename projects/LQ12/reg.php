<h2>REGISTRATION</h2>

Fill up the fields below:
<form name="regfrm" method="post" action="retrive.php" >
<table align="center" id="regtbl">
<tr><td>	First Name						</td><td>:			<input type="text" name="fname" />	</td></tr>
<tr><td>	Last Name						</td><td>:			<input type="text" name="lname" />	</td></tr>
<tr><td>	Select a username				</td><td>:			<input type="text" name="uname" />		</td></tr>
<tr><td>									</td><td>		--	availability		</td></tr>
<tr><td>	e-mail ID						</td><td>:			<input type="text" name="eid" />	</td></tr>
<tr><td>	Phone Number					</td><td>:			<input type="text" name="phno" />	</td></tr>
<tr><td>	Mobile Number					</td><td>:			<input type="text" name="mono" />	</td></tr>
<tr><td>	Education						</td><td>:			<select name="edu">
																		<option>	Graduate	</option>
																		<option>	Post Graduate</option>
																		<option>	Undergraduate</option>
                                                                        </select >	</td></tr>
<tr><td>	College							</td><td>:			<select name="clg" > 

																	<?php 
                                                                    $phpclg = array('National Institute of technology Rourkela','National Institute of thecnology Raipur','Indian Institute of Technology Delhi','Bhilai Institute of Technology','Rungta Group of colleges','Shankara group of colleges','Chhatrapati Shivaji Institute of Technology','Chhattisgarh Institute of technology','Christian College of technology');
                                                                    sort( $phpclg );
                                                                    $i=0;
                                                                    while( $phpclg[ $i ] != NULL )
                                                                    {	  echo "<option> " . $phpclg[ $i] . "</option>";
                                                                          $i++;
                                                                    }
                                                                    ?>       
                                                                </select >	</td></tr>
<tr><td>	Course							</td><td>:			<select name="cou">
																		<option>	B.E.</option>
																		<option>	B. Tech</option>
																		<option>	BCA</option>
																		<option>	MCA</option>
																		<option>	M. Tech</option>
																		<option>	M.E.</option>
                                                                        </select >	</td></tr>
<tr><td>	Date of Birth					</td><td>:			year <select name="year" style="width:55px;">
																			<?php
                                                                            for ($i=1970; $i<1997; $i++)
                                                                              {
                                                                              echo "<option> " . $i . "</option>";
                                                                              }
                                                                            ?>
                                                                        </select>

																month <select name="mon" style="width:35px;" id="b_mon" onchange=" " >
																			<?php 
																			for ($i=1; $i<13; $i++)
                                                                              {
                                                                              echo "<option> " . $i . "</option>";
                                                                              }
                                                                            ?>       
			                                                    	</select> 

















<?php
/*
// Use the form helper functions defined in Chapter 6

require 'formhelpers.php';



$months = array(1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 

                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',

                9 => 'September', 10 => 'October', 11 => 'November', 

                12 => 'December');



$years = array( );

for ($year = date('Y') - 1, $max_year = date('Y') + 5; $year < $max_year; $year++) {

    $years[$year] = $year;

}



if ($_POST['_submit_check']) {

    if ($errors = validate_form( )) {

        show_form($errors);

    } else {

        show_form( );

        process_form( );

    }

} else {

    // When nothing is submitted, show the form and then

    // a calendar for the current month

    show_form( );

    show_calendar(date('n'), date('Y'));

}



function validate_form( ) {

    global $months, $years;

    $errors = array( );



    if (! array_key_exists($_POST['month'], $months)) {

        $errors[  ] = 'Select a valid month.';

    }



    if (! array_key_exists($_POST['year'], $years)) {

        $errors[  ] = 'Select a valid year.';

    }



    return $errors;

}



function show_form($errors = '') {

    global $months, $years, $this_year;



    // If the form is submitted, get defaults from submitted variables

    if ($_POST['_submit_check']) {

        $defaults = $_POST;

    } else {

        // Otherwise, set our own defaults: the current month and year

        $defaults = array('year' => date('Y'),

                          'month' => date('n'));

    }





    if ($errors) {

        print 'You need to correct the following errors: <ul><li>';

        print implode('</li><li>',$errors);

        print '</li></ul>';

    }



    print '<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';

    input_select('month', $defaults, $months);

    input_select('year',  $defaults, $years);

    input_submit('submit','Show Calendar');

    print '<input type="hidden" name="_submit_check" value="1"/>';

    print '</form>';

}



function process_form( ) {

    show_calendar($_POST['month'], $_POST['year']);

}



function show_calendar($month, $year) {

    global $months;

    $weekdays = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');



    // Find the epoch timestamp for midnight on the first day of the month

    $first_day = mktime(0,0,0,$month, 1, $year);

    // How many days are in the month?

    $days_in_month = date('t', $first_day);

    // What day of the week (numerically) is the first day of the month?

    // You need this to put the first table cell in the right place

    $day_offset = date('w', $first_day);





    // Print the table header and the row of weekday names

    print<<<_HTML_

<table border="0" cellspacing="0" cellpadding="2">

<tr><th colspan="7">$months[$month] $year</th></tr>

<tr><td align="center">

_HTML_;

    print implode('</td><td align="center">', $weekdays);

    print '</td></tr>';





    // If the first day of the month is, say, a Tuesday, then you

    // need to put blank table cells under "Su" and "Mo" in the first

    // row so that the day 1 table cell goes under "Tu"

    if ($day_offset > 0) {

        for ($i = 0; $i < $day_offset; $i++) { print '<td>&nbsp;</td>'; }

    }



    // Print a table cell for each day of the month

    for ($day = 1; $day <= $days_in_month; $day++ ) {

        print '<td align="center">' . $day . '</td>';

        $day_offset++;

        // If this cell was the seventh in the row, then

        // end the table row and reset $day_offset

        if ($day_offset == 7) {

            $day_offset = 0;

            print "</tr>\n";

            // If there are more days to come, then

            // start a new table row

            if ($day < $days_in_month) {

                print '<tr>';

            }

        }

    }



    // At this point, one table cell has been printed for each day

    // of the month. If the last day of the month isn't a Saturday

    // then the last row of the table needs to be padded with

    // some blank cells out to the end of the row

    if ($day_offset > 0) {

        for ($i = $day_offset; $i < 7; $i++) {

            print '<td>&nbsp;</td>';

        }

        print '</tr>';

    }

    print '</table>';

}
*/
?>



















                                                                Day <select name="bday" style="width:45px;" disabled="disabled" >
																			<?php 
                                                                            for ($i=1; $i< 32 ; $i++)
                                                                              {
                                                                              echo "<option> " . $i . "</option>";
                                                                              }
                                                                            ?>                                                           
	                                                               	</select>			
                                                                </td></tr>
<tr><td>	Semester						</td><td>:			<select name="sem">
																	<?php 
                                                                    for ($i=1; $i< 11 ; $i++)
                                                                    echo "<option> " . $i . "</option>";
                                                                    ?>                                                           
																</select>			</td></tr>
<tr><td>	Address							</td><td>:			<input type="text"	name="yr" />		</td></tr>
<tr><td>	Password						</td><td>:			<input type="password" name="pswd1" />	</td></tr>
<tr><td>			</td><td>		(at least 8 characters long)	</td></tr>
<tr><td>	Re-type	password				</td><td>:			<input type="password" name="pswd2" />	</td></tr>
</table>
<br/><br/>
<center>	<input type="submit" /> </center>
</form>