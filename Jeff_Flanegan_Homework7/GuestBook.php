<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    GuestBook.php
    2019-10-7-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Guest Book</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h1>Guest Book</h1>
        <?php
            if (isset($_GET['action'])){
                //make sure file exists and has data
                if((file_exists("guest.txt")) && (filesize("guest.txt") != 0)){
                    $GuestArray = file("guest.txt");//save file data to array var
                    //user options
                    switch ($_GET['action']){
                        case 'Remove Duplicates':
                            $GuestArray = array_unique($GuestArray);
                            $GuestArray = array_values($GuestArray); //re-index array
                            break;
                        case 'Sort Ascending':
                            sort($GuestArray);
                            break;
                        case 'Shuffle':
                            shuffle($GuestArray);
                            break;
                    }
                    //save guest list
                    if(count($GuestArray)>0){
                        $Guests = implode($GuestArray);//convert to string
                        $GuestBook = fopen("guest.txt", "wb");//open file as var
                        if($GuestBook === false){
                            echo "There was an error updating the guest file\n";
                        }
                        //write new data and close
                        else{
                            fwrite($GuestBook, $Guests);
                            fclose($GuestBook);
                        }
                    }
                    else{
                        unlink("guest.txt");
                    }
                }
            }
            //handle web form data
            if(isset($_POST['submit'])){
                //user enters song
                $Guest = stripslashes($_POST['GuestName']) . "\n";
                $Guests = array();
                //save file data
                if(file_exists("guest.txt") && filesize("guest.txt")>0){
                    $Guests = file("guest.txt");
                }
                if (in_array($Guest, $Guests)){
                    echo "<p>The guest you entered already exists!<br>\n"
                    . "The guest was  not added to the list.</p>";
                }
                //open file and add to list
                else{
                    $GuestFile = fopen("guest.txt", "ab");
                    if($GuestFile === false){
                        echo "There was an error updating the guest file\n";
                    }
                    else{
                        fwrite($GuestFile, $Guest);
                        fclose($GuestFile);
                        echo "The guest has been added to the list.\n";
                    }
                }
            }
            //open file, show guest list in table
            if ((!file_exists("guest.txt")) || (filesize("guest.txt") == 0)){
                echo"<p>There are no Guests in the list.</p>\n";
            }
            else{
                $GuestArray = file("guest.txt");
                echo "<table border = \"1\" width = \"100%\" style = \"background-color:lightgray\">\n";
                foreach ($GuestArray as $Guest){
                    echo "<tr>\n";
                    echo "<td>" . htmlentities($Guest) . "</td>";
                    echo "</tr>\n";
                }
                echo"</table>\n";
            }
        ?>
        <!--Action links and input form-->
        <p><a href="GuestBook.php?action=Sort%20Ascending">Sort Names</a><br /></p>
        <p><a href="GuestBook.php?action=Remove%20Duplicates">Remove Duplicate Names</a><br /></p>
        <form action ="GuestBook.php" method ="post">
            <p>Sign the Guest Book</p>
            <p>Your Name: <input type="text" name="GuestName"/></p>
            <p><input type="submit" name="submit" value="Sign the Guest Book"/>
                <input type="reset" name="reset" value="Clear Form" /></p>
        </form>
    </body>
</html>
