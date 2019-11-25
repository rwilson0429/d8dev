    <?php
    /* =============================================================
    /   * Remote Drupal Cache Cleaner
    	* Version 1.1 (25/03/2019)
    	* 
    	* Developed by Daniel Brooke Peig - daniel@danbp.org
    	* http://www.danbp.org
    	* Copyright 2019 - Daniel Brooke Peig
    	*
    	* This software is distributed under the MIT License.
    	* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
    	*
    	* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    	*
    	* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
    	*
    	*
    /* =============================================================*/
     
    $servername = "localhost";
    $username = "j3i9nvzy_Reggie";
    $password = "Rubbish01~!";
    $dbname = "j3i9nvzy_rsa";
     
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error ."<BR>");
    }
     
    //Tables to truncate
    $sqltbl[0] = "cache_config";
    $sqltbl[1] = "cache_container";
    $sqltbl[2] = "cache_data";
    $sqltbl[3] = "cache_default";
    $sqltbl[4] = "cache_discovery";
    $sqltbl[5] = "cache_dynamic_page_cache";
    $sqltbl[6] = "cache_entity";
    $sqltbl[7] = "cache_menu";
    $sqltbl[8] = "cache_render";
    $sqltbl[9] = "cache_toolbar";
    $sqltbl[10] = "cache_page";
     
    //Run the command
    for($i=0;$i<count($sqltbl);$i++){
        if ($conn->query("TRUNCATE ".$sqltbl[$i]) === TRUE) {
            echo "Limpeza concluída na tabela <i>". $sqltbl[$i] ."</i> .<BR>";
        } else {
            echo "Erro limpando a tabela de cache <i>".$sqltbl[$i].": ". $conn->error ."</i><BR>";
        }
    }
     
    $conn->close();
    ?> 