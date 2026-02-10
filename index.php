<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #c9cacb;
        }
        .card {
            margin-bottom: 20px;
        }
         .table th, .table td {
            vertical-align: middle;
        }
         .table thead th {
            background-color: #343a40;
            color: #fff;
        }
         .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
         .table tbody tr:hover {
            background-color: #e9ecef;
        }
         .card-title {
            color: #05080c;
        }
        th{
            text-align: center;
        }
        .card{
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-center mt-5">SQL Functions</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">SQL String Functions</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>String Functions</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ASCII()</td>
                            <td>Returns the ASCII value of the leftmost character of a string.</td>
                            <td>SELECT id, fullname, ASCII(fullname) AS ascii_value FROM records;</td>
                            <td><a href="String/ASCII.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CHAR_LENGTH()</td>
                            <td>Returns the number of characters in a string.</td>
                            <td>SELECT id, fullname, CHAR_LENGTH(fullname) AS char_len FROM records;</td>
                            <td><a href="String/CHAR_L.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CHARACTER_LENGTH()</td>
                            <td>Returns the number of characters in a string.</td>
                            <td>SELECT id, fullname, CHARACTER_LENGTH(fullname) AS char_length FROM records;</td>
                            <td><a href="String/CHARACTER_LENGTH.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CONCAT()</td>
                            <td>Returns the concatenation of strings.</td>
                            <td>SELECT id, fullname, CONCAT(fullname, ' - Student') AS label FROM records;</td>
                            <td><a href="String/CONCAT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CONCAT_WS()</td>
                            <td>Returns the concatenation of strings with a separator.</td>
                            <td>SELECT id, fullname, CONCAT_WS(' ', fullname, 'Student') AS label FROM records;</td>
                            <td><a href="String/CONCAT_WS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>FIELD()</td>
                            <td>Returns the index position of a string in a list of strings.</td>
                            <td>SELECT id, fullname, FIELD(fullname, 'Ethan', 'Shane', 'Cyrus') AS position FROM records;</td>
                            <td><a href="String/FIELD.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>FIND_IN_SET()</td>
                            <td>Returns the position of a string within a comma-separated list of strings.</td>
                            <td>SELECT id, fullname, FIND_IN_SET(fullname, 'Norinne,David,Crisanna') AS position FROM records;</td>
                            <td><a href="String/FIND_IN_SET.php" target="_blank">View Output</a></td>   
                        </tr>
                        <tr>
                            <td>FORMAT()</td>
                            <td>Formats a number to a specified number of decimal places.</td>
                            <td>SELECT id, fullname, FORMAT(1235.6789, 2) AS formatted_number FROM records;</td>
                            <td><a href="String/FORMAT.php" target="_blank">View Output</a></td>    
                        </tr>
                        <tr>
                            <td>INSERT()</td>
                            <td>Inserts a substring into a string at a specified position.</td>
                            <td>SELECT id, fullname, INSERT(fullname, 2, 3, '***') AS modified_name FROM records;</td>
                            <td><a href="String/INSERT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>INSTR()</td>
                            <td>Returns the position of the first occurrence of a substring in a string.</td>
                            <td>SELECT id, fullname, INSTR(fullname, 'a') AS position FROM records;</td>
                            <td><a href="String/INSTR.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LCASE()</td>
                            <td>Converts a string to lowercase.</td>
                            <td>SELECT id, fullname, LCASE(fullname) AS lower_name FROM records;</td>
                            <td><a href="String/LCASE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LEFT()</td>
                            <td>Returns the leftmost characters from a string.</td>
                            <td>SELECT id, fullname, LEFT(fullname, 3) AS first_three FROM records;</td>
                            <td><a href="String/LEFT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LENGTH()</td>
                            <td>Returns the length of a string in bytes.</td>
                            <td>SELECT id, fullname, LENGTH(fullname) AS name_length FROM records;</td>
                            <td><a href="String/LENGTH.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOCATE()</td>
                            <td>Returns the position of the first occurrence of a substring in a string.</td>
                            <td>SELECT id, fullname, LOCATE('a', fullname) AS locate_pos FROM records;</td>
                            <td><a href="String/LOCATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOWER()</td>
                            <td>Converts a string to lowercase.</td>
                            <td>SELECT id, fullname, LOWER(fullname) AS lower_name FROM records;</td>
                            <td><a href="String/LOWER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LPAD()</td>
                            <td>Returns a string left-padded with a specified string to a certain length.</td>
                            <td>SELECT id, fullname, LPAD(fullname, 10, '*') AS padded_name FROM records;</td>
                            <td><a href="String/LPAD.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LTRIM()</td>
                            <td>Removes leading spaces from a string.</td>
                            <td>SELECT id, fullname, LTRIM(fullname) AS trimmed_name FROM records;</td>
                            <td><a href="String/LTRIM.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MID()</td>
                            <td>Returns a substring from a string.</td>
                            <td>SELECT id, fullname, MID(fullname, 2, 3) AS mid_name FROM records;</td>
                            <td><a href="String/MID.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>POSITION()</td>
                            <td>Returns the position of the first occurrence of a substring in a string.</td>
                            <td>SELECT id, fullname, POSITION('a' IN fullname) AS position FROM records;</td>
                            <td><a href="String/POSITION.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>REPEAT()</td>
                            <td>Returns a string repeated a specified number of times.</td>
                            <td>SELECT id, fullname, REPEAT(fullname, 2) AS repeated_name FROM records;</td>
                            <td><a href="String/REPEAT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>REPLACE()</td>
                            <td>Replaces occurrences of a substring within a string.</td>
                            <td>SELECT id, fullname, REPLACE(fullname, 'a', '@') AS replaced_name FROM records;</td>
                            <td><a href="String/REPLACE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>REVERSE()</td>
                            <td>Returns the reverse of a string.</td>
                            <td>SELECT id, fullname, REVERSE(fullname) AS reversed_name FROM records;</td>
                            <td><a href="String/REVERSE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>RIGHT()</td>
                            <td>Returns the rightmost characters from a string.</td>
                            <td>SELECT id, fullname, RIGHT(fullname, 3) AS last_three FROM records;</td>
                            <td><a href="String/RIGHT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>RPAD()</td>
                            <td>Returns a string right-padded with a specified string to a certain length.</td>
                            <td>SELECT id, fullname, RPAD(fullname, 10, '*') AS padded_name FROM records;</td>
                            <td><a href="String/RPAD.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>RTRIM()</td>
                            <td>Removes trailing spaces from a string.</td>
                            <td>SELECT id, fullname, RTRIM(fullname) AS trimmed_name FROM records;</td>
                            <td><a href="String/RTRIM.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SPACE()</td>
                            <td>Returns a string consisting of a specified number of spaces.</td>
                            <td>SELECT id, fullname, CONCAT(fullname, SPACE(5), 'END') AS spaced_name FROM records;</td>
                            <td><a href="String/SPACE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>STRCMP()</td>
                            <td>Compares two strings and returns an integer based on the comparison.</td>
                            <td>SELECT id, fullname, STRCMP(fullname, 'Alice') AS comparison_result FROM records;</td>
                            <td><a href="String/STRCMP.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SUBSTR()</td>
                            <td>Returns a substring from a string.</td>
                            <td>SELECT id, fullname, CONCAT(fullname, SPACE(5), 'END') AS spaced_name FROM records;</td>
                            <td><a href="String/SUBSTR.php" target="_blank">View Output</a></td> 
                        </tr>
                        <tr>
                            <td>SUBSTRING()</td>
                            <td>Returns a substring from a string.</td>
                            <td>SELECT id, fullname, SUBSTRING(fullname, 2, 3) AS sub_name FROM records;</td>
                            <td><a href="String/SUBSTRING.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SUBSTRING_INDEX()</td>
                            <td>Returns a substring from a string before or after a specified number of occurrences of a delimiter.</td>
                            <td>SELECT id, fullname, SUBSTRING_INDEX(fullname, ' ', 1) AS first_word, SUBSTRING_INDEX(fullname, ' ', -1) AS last_word FROM records;</td>
                            <td><a href="String/SUBSTRING_INDEX.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TRIM()</td>
                            <td>Removes leading and trailing spaces from a string.</td>
                            <td>SELECT id, fullname, TRIM(fullname) AS trimmed_name FROM records;</td>
                            <td><a href="String/TRIM.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>UCASE()</td>
                            <td>Converts a string to uppercase.</td>
                            <td>SELECT id, fullname, UCASE(fullname) AS upper_name FROM records;</td>
                            <td><a href="String/UCASE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>UPPER()</td>
                            <td>Converts a string to uppercase.</td>
                            <td>SELECT id, fullname, UPPER(fullname) AS upper_name FROM records;</td>
                            <td><a href="String/UPPER.php" target="_blank">View Output</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">SQL Numeric Functions</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Numeric Functions</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ABS()</td>
                            <td>Returns the absolute value of a number.</td>
                            <td>SELECT id, fullname, score, ABS(score - 90) AS result FROM records;</td>
                            <td><a href="Numeric/ABS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ACOS()</td>
                            <td>Returns the arc cosine of a number.</td>
                            <td>SELECT id, fullname, score, ACOS(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/ACOS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ASIN()</td>
                            <td>Returns the arc sine of a number.</td>
                            <td>SELECT id, fullname, score, ASIN(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/ASIN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ATAN()</td>
                            <td>Returns the arc tangent of a number.</td>
                            <td>SELECT id, fullname, score, ATAN(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/ATAN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ATAN2()</td>
                            <td>Returns the arc tangent of two numbers.</td>
                            <td>SELECT id, fullname, score, amount, ATAN2(score, amount) AS result FROM records;</td>
                            <td><a href="Numeric/ATAN2.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>AVG()</td>
                            <td>Returns the average value of a numeric column.</td>
                            <td>SELECT AVG(score) AS result FROM records;</td>
                            <td><a href="Numeric/AVG.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CEIL()</td>
                            <td>Returns the smallest integer value greater than or equal to a number.</td>
                            <td>SELECT id, fullname, amount, CEIL(amount) AS result FROM records;</td>
                            <td><a href="Numeric/CEIL.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CEILING()</td>
                            <td>Returns the smallest integer value greater than or equal to a number.</td>
                            <td>SELECT id, fullname, amount, CEILING(amount) AS result FROM records;</td>
                            <td><a href="Numeric/CEILING.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>COS()</td>
                            <td>Returns the cosine of a number.</td>
                            <td>SELECT id, fullname, score, COS(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/COS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>COT()</td>
                            <td>Returns the cotangent of a number.</td>
                            <td>SELECT id, fullname, score, COT(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/COT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>COUNT()</td>
                            <td>Returns the number of rows in a table.</td>
                            <td>SELECT COUNT(*) AS total_records FROM records;</td>
                            <td><a href="Numeric/COUNT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DEGREES()</td>
                            <td>Returns the degrees of a number.</td>
                            <td>SELECT id, fullname, score, DEGREES(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/DEGREES.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DIV()</td>
                            <td>Returns the integer division of two numbers.</td>
                            <td>SELECT id, fullname, score, amount, score DIV 10 AS result FROM records;</td>
                            <td><a href="Numeric/DIV.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>EXP()</td>
                            <td>Returns e raised to the power of a number.</td>
                            <td>SELECT id, fullname, score, EXP(score/100) AS result FROM records;</td>
                            <td><a href="Numeric/EXP.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>FLOOR()</td>
                            <td>Returns the largest integer value less than or equal to a number.</td>
                            <td>SELECT id, fullname, amount, FLOOR(amount) AS result FROM records;</td>
                            <td><a href="Numeric/FLOOR.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>GREATEST()</td>
                            <td>Returns the greatest value in a set of values.</td>
                            <td>SELECT id, fullname, score, amount, GREATEST(score, amount) AS result FROM records;</td>
                            <td><a href="Numeric/GREATEST.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LEAST()</td>
                            <td>Returns the least value in a set of values.</td>
                            <td>SELECT id, fullname, score, amount, LEAST(score, amount) AS result FROM records;</td>
                            <td><a href="Numeric/LEAST.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LN()</td>
                            <td>Returns the natural logarithm of a number.</td>
                            <td>SELECT id, fullname, score, LN(score) AS result FROM records WHERE score > 0;</td>
                            <td><a href="Numeric/LN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOG()</td>
                            <td>Returns the logarithm of a number to a specified base.</td>
                            <td>SELECT id, fullname, score, LOG(score) AS result FROM records WHERE score > 0;</td>
                            <td><a href="Numeric/LOG.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOG10()</td>
                            <td>Returns the base-10 logarithm of a number.</td>
                            <td>SELECT id, fullname, score, LOG10(score) AS result FROM records WHERE score > 0;</td>
                            <td><a href="Numeric/LOG10.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOG2()</td>
                            <td>Returns the base-2 logarithm of a number.</td>
                            <td>SELECT id, fullname, score, LOG2(score) AS result FROM records WHERE score > 0;</td>
                            <td><a href="Numeric/LOG2.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MAX()</td>
                            <td>Returns the maximum value in a set of values.</td>
                            <td>SELECT MAX(score) AS max_score, MAX(amount) AS max_amount FROM records;</td>
                            <td><a href="Numeric/MAX.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MIN()</td>
                            <td>Returns the minimum value in a set of values.</td>
                            <td>SELECT MIN(score) AS min_score, MIN(amount) AS min_amount FROM records;</td>
                            <td><a href="Numeric/MIN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MOD()</td>
                            <td>Returns the remainder of a division operation.</td>
                            <td>SELECT id, fullname, score, MOD(score, 10) AS result FROM records;</td>
                            <td><a href="Numeric/MOD.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>PI()</td>
                            <td>Returns the value of pi.</td>
                            <td>SELECT PI();</td>
                            <td><a href="Numeric/PI.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>POW()</td>
                            <td>Returns a number raised to the power of another number.</td>
                            <td>SELECT id, fullname, score, POW(score, 2) AS result FROM records;</td>
                            <td><a href="Numeric/POW.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>POWER()</td>
                            <td>Returns a number raised to the power of another number.</td>
                            <td>SELECT id, fullname, score, POWER(score, 3) AS result FROM records;</td>
                            <td><a href="Numeric/POWER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>RADIANS()</td>
                            <td>Returns the radians value of a degree.</td>
                            <td>SELECT id, fullname, score, RADIANS(score) AS result FROM records;</td>
                            <td><a href="Numeric/RADIANS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>RAND()</td>
                            <td>Returns a random floating-point value between 0 and 1.</td>
                            <td>SELECT id, fullname, score, RAND() AS result FROM records;</td>
                            <td><a href="Numeric/RAND.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ROUND()</td>
                            <td>Rounds a number to a specified number of decimal places.</td>
                            <td>SELECT id, fullname, amount, ROUND(amount, 0) AS rounded_0, ROUND(amount, 2) AS rounded_2 FROM records;</td>
                            <td><a href="Numeric/ROUND.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SIGN()</td>
                            <td>Returns the sign of a number.</td>
                            <td>SELECT id, fullname, score, SIGN(score) AS result FROM records;</td>
                            <td><a href="Numeric/SIGN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SIN()</td>
                            <td>Returns the sine of a number.</td>
                            <td>SELECT id, fullname, score, SIN(score) AS result FROM records;</td>
                            <td><a href="Numeric/SIN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SQRT()</td>
                            <td>Returns the square root of a number.</td>
                            <td>SELECT id, fullname, score, SQRT(score) AS result FROM records WHERE score >= 0;</td>
                            <td><a href="Numeric/SQRT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SUM()</td>
                            <td>Returns the sum of a numeric column.</td>
                            <td>SELECT SUM(score) AS total_score, SUM(amount) AS total_amount FROM records;</td>
                            <td><a href="Numeric/SUM.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TAN()</td>
                            <td>Returns the tangent of a number.</td>
                            <td>SELECT id, fullname, score, TAN(score) AS result FROM records;</td>
                            <td><a href="Numeric/TAN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TRUNCATE()</td>
                            <td>Truncates a number to a specified number of decimal places.</td>
                            <td>SELECT id, fullname, amount, TRUNCATE(amount, 0) AS trunc_0, TRUNCATE(amount, 2) AS trunc_2 FROM records;</td>
                            <td><a href="Numeric/TRUNCATE.php" target="_blank">View Output</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">SQL Date Functions</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Date Functions</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ADDDATE()</td>
                            <td>Adds a specified number of days to a date.</td>
                            <td>SELECT id, fullname, birthday, ADDDATE(birthday, INTERVAL 10 DAY) AS add_10_days FROM records;</td>
                            <td><a href="Date/ADDDATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ADDTIME()</td>
                            <td>Adds a specified number of hours, minutes, and seconds to a time.</td>
                            <td>SELECT id, fullname, login_datetime, ADDTIME(login_datetime, '02:30:00') AS added_time FROM records;</td>
                            <td><a href="Date/ADDTIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CURDATE()</td>
                            <td>Returns the current date.</td>
                            <td>SELECT id, fullname, CURDATE() AS today_date FROM records;</td>
                            <td><a href="Date/CURDATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CURRENT_DATE()</td>
                            <td>Returns the current date.</td>
                            <td>SELECT id, fullname, CURRENT_DATE() AS today_date FROM records;</td>
                            <td><a href="Date/CURRENT_DATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CURRENT_TIME()</td>
                            <td>Returns the current time.</td>
                            <td>SELECT id, fullname, CURRENT_TIME() AS 'current_time' FROM records;</td>
                            <td><a href="Date/CURRENT_TIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CURRENT_TIMESTAMP()</td>
                            <td>Returns the current date and time.</td>
                            <td>SELECT id, fullname, CURRENT_TIMESTAMP() AS current_dt FROM records;</td>
                            <td><a href="Date/CURRENT_TIMESTAMP.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CURTIME()</td>
                            <td>Returns the current time.</td>
                            <td>SELECT CURTIME() AS cur_time;</td>
                            <td><a href="Date/CURTIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DATE()</td>
                            <td>Extracts the date part of a date or datetime expression.</td>
                            <td>SELECT id, fullname, login_datetime, DATE(login_datetime) AS login_date FROM records;</td>
                            <td><a href="Date/DATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DATEDIFF()</td>
                            <td>Returns the number of days between two dates.</td>
                            <td>SELECT id, fullname, DATEDIFF(CURDATE(), '2000-01-01') AS days_since_2000 FROM records;</td>
                            <td><a href="Date/DATEDIFF.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DATE_ADD()</td>
                            <td>Adds a specified time interval to a date.</td>
                            <td>SELECT id, fullname, birthday, DATE_ADD(birthday, INTERVAL 1 YEAR) AS birthday_next_year FROM records;</td>
                            <td><a href="Date/DATE_ADD.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DATE_FORMAT()</td>
                            <td>Formats a date or datetime value according to a specified format.</td>
                            <td>SELECT id, fullname, birthday, DATE_FORMAT(birthday, '%W, %M %d, %Y') AS formatted_birthday FROM records;</td>
                            <td><a href="Date/DATE_FORMAT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DATE_SUB()</td>
                            <td>Subtracts a specified time interval from a date.</td>
                            <td>SELECT id, fullname, birthday, DATE_SUB(birthday, INTERVAL 5 DAY) AS minus_5_days FROM records;</td>
                            <td><a href="Date/DATE_SUB.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DAY()</td>
                            <td>Extracts the day of the month from a date.</td>
                            <td>SELECT id, fullname, birthday, DAY(birthday) AS day_of_month FROM records;</td>
                            <td><a href="Date/DAY.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DAYNAME()</td>
                            <td>Returns the name of the weekday for a date.</td>
                            <td>SELECT id, fullname, birthday, DAYNAME(birthday) AS weekday_name FROM records;</td>
                            <td><a href="Date/DAYNAME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DAYOFMONTH()</td>
                            <td>Extracts the day of the month from a date.</td>
                            <td>SELECT id, fullname, birthday, DAYOFMONTH(birthday) AS day_of_month FROM records;</td>
                            <td><a href="Date/DAYOFMONTH.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DAYOFWEEK()</td>
                            <td>Returns the weekday index for a date.</td>
                            <td>SELECT id, fullname, birthday, DAYOFWEEK(birthday) AS weekday_index FROM records;</td>
                            <td><a href="Date/DAYOFWEEK.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DAYOFYEAR()</td>
                            <td>Returns the day of the year for a date.</td>
                            <td>SELECT id, fullname, birthday, DAYOFYEAR(birthday) AS day_of_year FROM records;</td>
                            <td><a href="Date/DAYOFYEAR.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>EXTRACT()</td>
                            <td>Extracts a specific part of a date.</td>
                            <td>SELECT id, fullname, birthday, EXTRACT(YEAR FROM birthday) AS birth_year FROM records;</td>
                            <td><a href="Date/EXTRACT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>FROM_DAYS()</td>
                            <td>Converts a number of days to a date.</td>
                            <td>SELECT id, fullname, birthday, FROM_DAYS(TO_DAYS(birthday)) AS same_date FROM records;</td>
                            <td><a href="Date/FROM_DAYS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>HOUR()</td>
                            <td>Extracts the hour from a time or datetime value.</td>
                            <td>SELECT id, fullname, login_datetime, HOUR(login_datetime) AS hour_part FROM records;</td>
                            <td><a href="Date/HOUR.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LAST_DAY()</td>
                            <td>Returns the last day of the month for a given date.</td>
                            <td>SELECT id, fullname, birthday, LAST_DAY(birthday) AS last_day_of_month FROM records;</td>
                            <td><a href="Date/LAST_DAY.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOCALTIME()</td>
                            <td>Returns the current date and time.</td>
                            <td>SELECT id, fullname, birthday, LAST_DAY(birthday) AS last_day_of_month FROM records;</td>
                            <td><a href="Date/LOCALTIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LOCALTIMESTAMP()</td>
                            <td>Returns the current date and time.</td>
                            <td>SELECT id, fullname, LOCALTIMESTAMP() AS 'local_timestamp' FROM records;</td>
                            <td><a href="Date/LOCATTIMESTAMP.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MAKEDATE()</td>
                            <td>Creates a date from a year and day of the year.</td>
                            <td>SELECT id, fullname, MAKEDATE(2024, 45) AS date_from_year_day FROM records LIMIT 1;</td>
                            <td><a href="Date/MAKEDATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MAKETIME()</td>
                            <td>Creates a time from hour, minute, and second values.</td>
                            <td>SELECT id, fullname, MAKETIME(14, 30, 45) AS custom_time FROM records LIMIT 1;</td>
                            <td><a href="Date/MAKETIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MICROSECOND()</td>
                            <td>Extracts the microsecond part of a time or datetime value.</td>
                            <td>SELECT id, fullname, login_datetime, MICROSECOND(login_datetime) AS microsec FROM records;</td>
                            <td><a href="Date/MICROSECOND.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MINUTE()</td>
                            <td>Extracts the minute from a time or datetime value.</td>
                            <td>SELECT id, fullname, login_datetime, MINUTE(login_datetime) AS minute_part FROM records;</td>
                            <td><a href="Date/MINUTE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MONTH()</td>
                            <td>Extracts the month from a date.</td>
                            <td>SELECT id, fullname, birthday, MONTH(birthday) AS month_number FROM records;</td>
                            <td><a href="Date/MONTH.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>MONTHNAME()</td>
                            <td>Returns the name of the month for a date.</td>
                            <td>SELECT id, fullname, birthday, MONTHNAME(birthday) AS month_name FROM records;</td>
                            <td><a href="Date/MONTHNAME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>NOW()</td>
                            <td>Returns the current date and time.</td>
                            <td>SELECT id, fullname, NOW() AS current_datetime FROM records LIMIT 1;</td>
                            <td><a href="Date/NOW.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>PERIOD_ADD()</td>
                            <td>Adds a period to a date.</td>
                            <td>SELECT id, fullname, PERIOD_ADD(202402, 3) AS new_period FROM records LIMIT 1;</td>
                            <td><a href="Date/PERIOD_ADD.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>PERIOD_DIFF()</td>
                            <td>Returns the difference between two periods.</td>
                            <td>SELECT id, fullname, PERIOD_DIFF(202404, 202402) AS period_difference FROM records LIMIT 1;</td>
                            <td><a href="Date/PERIOD_DIFF.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>QUARTER()</td>
                            <td>Returns the quarter of the year for a date.</td>
                            <td>SELECT id, fullname, birthday, QUARTER(birthday) AS quarter_of_year FROM records;</td>
                            <td><a href="Date/QUARTER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SECOND()</td>
                            <td>Extracts the second from a time or datetime value.</td>
                            <td>SELECT id, fullname, login_datetime, SECOND(login_datetime) AS second_part FROM records;</td>
                            <td><a href="Date/SECOND.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SEC_TO_TIME()</td>
                            <td>Converts seconds to a time value.</td>
                            <td>SELECT id, fullname, SEC_TO_TIME(5000) AS time_from_seconds FROM records LIMIT 1;</td>
                            <td><a href="Date/SEC_TO_TIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>STR_TO_DATE()</td>
                            <td>Converts a string to a date according to a specified format.</td>
                            <td>SELECT id, fullname, STR_TO_DATE('21-05-2003', '%d-%m-%Y') AS formatted_date FROM records LIMIT 1;</td>
                            <td><a href="Date/STR_TO_DATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SUBDATE()</td>
                            <td>Subtracts a specified number of days from a date.</td>
                            <td>SELECT id, fullname, birthday, SUBDATE(birthday, INTERVAL 7 DAY) AS birthday_minus_7_days FROM records;</td>
                            <td><a href="Date/SUBDATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SUBTIME()</td>
                            <td>Subtracts a specified time from a time or datetime value.</td>
                            <td>SELECT id, fullname, login_time, SUBTIME(login_time, '02:15:00') AS adjusted_time FROM records;</td>
                            <td><a href="Date/SUBTIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SYSDATE()</td>
                            <td>Returns the current date and time.</td>
                            <td>SELECT id, fullname, SYSDATE() AS current_sysdate FROM records LIMIT 1;</td>
                            <td><a href="Date/SYSDATE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TIME()</td>
                            <td>Extracts the time part of a time or datetime expression.</td>
                            <td>SELECT id, fullname, login_datetime, TIME(login_datetime) AS time_part FROM records;</td>
                            <td><a href="Date/TIME.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TIME_FORMAT()</td>
                            <td>Formats a time value according to a specified format.</td>
                            <td>SELECT id, fullname, login_time, TIME_FORMAT(login_time, '%h:%i %p') AS formatted_time FROM records;</td>
                            <td><a href="Date/TIME_FORMAT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TIME_TO_SEC()</td>
                            <td>Converts a time value to seconds.</td>
                            <td>SELECT id, fullname, login_time, TIME_TO_SEC(login_time) AS seconds_total FROM records;</td>
                            <td><a href="Date/TIME_TO_SEC.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TIMEDIFF()</td>
                            <td>Returns the difference between two time or datetime values.</td>
                            <td>SELECT r1.id, r1.fullname, TIMEDIFF(r1.login_time, r2.login_time) AS time_difference FROM records r1, records r2 WHERE r1.id=1 AND r2.id=2;</td>
                            <td><a href="Date/TIMEDIFF.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TIMESTAMP()</td>
                            <td>Returns a datetime value from a date or datetime expression.</td>
                            <td>SELECT id, fullname, TIMESTAMP(birthday, login_time) AS combined_datetime FROM records LIMIT 1;</td>
                            <td><a href="Date/TIMESTAMP.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>TO_DAYS()</td>
                            <td>Converts a date to the number of days since year 0.</td>
                            <td>SELECT id, fullname, birthday, TO_DAYS(birthday) AS days_since_zero FROM records;</td>
                            <td><a href="Date/TO_DAYS.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>WEEK()</td>
                            <td>Returns the week number for a date.</td>
                            <td>SELECT id, fullname, birthday, WEEK(birthday) AS week_number FROM records;</td>
                            <td><a href="Date/WEEK.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>WEEKDAY()</td>
                            <td>Returns the weekday index for a date (0 = Monday, 6 = Sunday).</td>
                            <td>SELECT id, fullname, birthday, WEEKDAY(birthday) AS weekday_number FROM records;</td>
                            <td><a href="Date/WEEKDAY.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>WEEKOFYEAR()</td>
                            <td>Returns the week number of the year for a date.</td>
                            <td>SELECT id, fullname, birthday, WEEKOFYEAR(birthday) AS week_of_year FROM records;</td>
                            <td><a href="Date/WEEKOFYEAR.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>YEAR()</td>
                            <td>Extracts the year from a date.</td>
                            <td>SELECT id, fullname, birthday, YEAR(birthday) AS year_part FROM records;</td>
                            <td><a href="Date/YEAR.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>YEARWEEK()</td>
                            <td>Returns the year and week number for a date.</td>
                            <td>SELECT id, fullname, birthday, YEARWEEK(birthday) AS year_week FROM records;</td>
                            <td><a href="Date/YEARWEEK.php" target="_blank">View Output</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">SQL Advanced Functions</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Advanced Functions</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BIN()</td>
                            <td>Returns the binary representation of a number.</td>
                            <td>SELECT id, fullname, score, BIN(score) AS binary_score FROM records;</td>
                            <td><a href="Advanced/BIN.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>BINARY()</td>
                            <td>Returns a binary representation of a string.</td>
                            <td>SELECT id, fullname, BINARY(nickname) AS binary_nickname FROM records;</td>
                            <td><a href="Advanced/BINARY.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CASE()</td>
                            <td>Returns a value based on a set of conditions.</td>
                            <td>SELECT id, fullname, score, CASE WHEN score >= 90 THEN 'Excellent' WHEN score >= 75 THEN 'Good' ELSE 'Needs Improvement' END AS rating FROM records;</td>
                            <td><a href="Advanced/CASE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CAST()</td>
                            <td>Converts a value from one data type to another.</td>
                            <td>SELECT id, fullname, score, CAST(score AS CHAR) AS score_char FROM records;</td>
                            <td><a href="Advanced/CAST.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>COALESCE()</td>
                            <td>Returns the first non-null value in a list.</td>
                            <td>SELECT id, fullname, COALESCE(optional_field, 'N/A') AS status FROM records;</td>
                            <td><a href="Advanced/COALESCE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CONNECTION_ID()</td>
                            <td>Returns the connection ID of the current connection.</td>
                            <td>SELECT CONNECTION_ID() AS connection_id;</td>
                            <td><a href="Advanced/CONNECTION_ID.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CONV()</td>
                            <td>Converts a number from one base to another.</td>
                            <td>SELECT id, fullname, score, CONV(score, 10, 2) AS score_binary FROM records;</td>
                            <td><a href="Advanced/CONV.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CONVERT()</td>
                            <td>Converts a value from one data type to another.</td>
                            <td>SELECT id, fullname, CONVERT(score, CHAR) AS score_char FROM records;</td>
                            <td><a href="Advanced/CONVERT.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>CURRENT_USER()</td>
                            <td>Returns the current MySQL user.</td>
                            <td>SELECT CURRENT_USER() AS current_user;</td>
                            <td><a href="Advanced/CURRENT_USER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>DATABASE()</td>
                            <td>Returns the name of the current database.</td>
                            <td>SELECT DATABASE() AS db_name;</td>
                            <td><a href="Advanced/DATABASE.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>IF()</td>
                            <td>Returns one value if a condition is true and another value if it is false.</td>
                            <td>SELECT id, fullname, score, IF(score>=90, 'Pass', 'Fail') AS result FROM records;</td>
                            <td><a href="Advanced/IF.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>IFNULL()</td>
                            <td>Returns a specified value if the expression is NULL.</td>
                            <td>SELECT id, fullname, IFNULL(optional_field, 'N/A') AS status FROM records;</td>
                            <td><a href="Advanced/IFNULL.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>ISNULL()</td>
                            <td>Returns 1 if the expression is NULL, otherwise returns 0.</td>
                            <td>SELECT id, fullname, ISNULL(optional_field) AS is_null FROM records;</td>
                            <td><a href="Advanced/ISNULL.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>LAST_INSERT_ID()</td>
                            <td>Returns the ID generated by the last INSERT statement.</td>
                            <td>SELECT LAST_INSERT_ID() AS last_id;</td>
                            <td><a href="Advanced/LAST_INSERT_ID.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>NULLIF()</td>
                            <td>Returns NULL if the two expressions are equal, otherwise returns the first expression.</td>
                            <td>SELECT id, fullname, score, NULLIF(score, 95) AS nullif_example FROM records;</td>
                            <td><a href="Advanced/NULLIF.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SESSION_USER()</td>
                            <td>Returns the current session user.</td>
                            <td>SELECT SESSION_USER() AS session_user;</td>
                            <td><a href="Advanced/SESSION_USER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>SYSTEM_USER()</td>
                            <td>Returns the system user.</td>
                            <td>SELECT SYSTEM_USER() AS system_user;</td>
                            <td><a href="Advanced/SYSTEM_USER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>USER()</td>
                            <td>Returns the current MySQL user.</td>
                            <td>SELECT id, fullname, USER() AS 'current_user' FROM records;</td>
                            <td><a href="Advanced/USER.php" target="_blank">View Output</a></td>
                        </tr>
                        <tr>
                            <td>VERSION()</td>
                            <td>Returns the MySQL server version.</td>
                            <td>SELECT VERSION() AS mysql_version;</td>
                            <td><a href="Advanced/VERSION.php" target="_blank">View Output</a></td>
                        </tr>
                    </tbody>
            </div>
        </div>

    </div>
    
</body>
</html>