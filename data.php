<? php


 ?>

 <html>
 <head>
 	<title>Untitled</title>
 </head>

 <body>

 <!--This is a html comment. Comments are not rendered by the browser-->

 <tble cellspacing="2" cellpadding="2" border="0">
 <tr>
     <td colspan="9">Open University Running Club Competition. October 2015</td>
 </tr>

 <<?php
$top = ["Position",'First Name','Last Name','Gender'
,'Age-Group','5 Mile','5 KM','10 Km','Total']

foreach ($top as $key ) {
  # code...
  echo $key;
}



  ?>
 <tr>
     <td>Position</td>
     <td>First Name</td>
     <td>Last Name</td>
     <td>Gender</td>
     <td>Age-Group</td>
     <td>5 Mile</td>
     <td>5 Km</td>
     <td>10 Km</td>
     <td>Total</td>
     <br>
 </tr>
 <tr>
     <td>1</td>
     <td>Steve</td>
     <td>Cram</td>
     <td>M</td>
     <td>50</td>
     <td>31:01</td>
     <td>18:36</td>
     <td>39:02</td>
     <td>88:39</td>
 </tr>
 <tr>
     <td>2</td>
     <td>Mo</td>
     <td>Farrah</td>
     <td>M</td>
     <td>32</td>
     <td>30:25</td>
     <td>17:42</td>
     <td>38:15</td>
     <td>86:22</td>
 </tr>
 <tr>
     <td>3</td>
     <td>Daniel</td>
     <td>Leiberman</td>
     <td>M</td>
     <td>50</td>
     <td>34:00</td>
     <td>19:29</td>
     <td>41:20</td>
     <td>94:49</td>
 </tr>
 <tr>
     <td>4</td>
     <td>Jeanette</td>
     <td>Kwakye</td>
     <td>F</td>
     <td>30</td>
     <td>33:49</td>
     <td>19:41</td>
     <td>41:50</td>
     <td>95:20</td>
 </tr>
 <tr>
     <td>5</td>
     <td>Paula</td>
     <td>Radclifee</td>
     <td>F</td>
     <td>30</td>
     <td>33:37</td>
     <td>19:41</td>
     <td>42:42</td>
     <td>96:08</td>
 </tr>
 <tr>
     <td>6</td>
     <td>Zola</td>
     <td>Budd</td>
     <td>F</td>
     <td>40</td>
     <td>34:31</td>
     <td>20:39</td>
     <td>42:48</td>
     <td>97:51</td>
 </tr>
 <tr>
     <td>7</td>
     <td>Brendan</td>
     <td>Foster</td>
     <td>M</td>
     <td>50</td>
     <td>34:42</td>
     <td>20:43</td>
     <td>42:49</td>
     <td>98:14</td>
 </tr>
 <tr>
     <td>8</td>
     <td>Chris</td>
     <td>Chataway</td>
     <td>M</td>
     <td>60</td>
     <td>35:01</td>
     <td>20:58</td>
     <td>44:36</td>
     <td>100:35</td>
 </tr>
 <tr>
     <td>9</td>
     <td>Sebastian</td>
     <td>Coe</td>
     <td>M</td>
     <td>50</td>
     <td>36:18</td>
     <td>21:50</td>
     <td>45:07</td>
     <td>103:15</td>
 </tr>

 </table>


 </body>
 </html>
