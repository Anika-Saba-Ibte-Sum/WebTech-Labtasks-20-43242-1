<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
  <div class="navitems">
    <table style="width: 100%;">
       <tr style="width: 100%;">

              <td style="width: 20%;">
         <ul>

            <li>User Account</li>
            <hr>
                    <li><a href="../View/Dasboard.php">Dashboard</a></li>
                    <li><a href="../View/View Profile.php">View Profile</a></li>
                    <li><a href="../View/Edit Profile.php">Edit Profile</a></li>
                    <li><a href="../View/Change Profile Picture.php">Change Profile Picture</a></li>
                    <li><a href="../View/Change Password.php">Change Password</a></li>
                    <li><a href="../View/Doctors List.php">Doctor's List</a></li>
                    <li><a href="../View/Appointment.php">Appointment</a></li>
                    <li><a href="../View/Prescription.php">Prescription</a></li>
                    <li><a href="../View/Payment.php">Payment</a></li>
                </ul>
               </td>
               <td class="DoctorList" style="width: 70%; position: relative;">
                
                
                <table style="display: block; position: absolute; left: 50%; transform: translateX(-50%);">
                  
                  
                 
                <form action=""> 
                <select name="doctors" onchange="showdoctor(this.value)">
                <option value="">Select a doctor</option>
                <option value="anika15">Anika Saba Ibte Sum</option>
                <option value="yeasir67 ">Md. Yeasir Hossain</option>
                <option value="pranto45">Zuhare Pranto</option>
                <option value="Md. Washim Akram">Md. Washim Akram</option>
                <option value="Sadia Afrin">Sadia Afrin</option>
                <option value="Nafis Siddique">Nafis Siddique</option>
                <option value="Faisal Abir">Faisal Abir</option>
                <option value="Nasrin Akter">Nasrin Akter</option>
                <option value="Laboni Sarkar">Laboni Sarkar</option>
                <option value="Talha Obaid">Talha Obaid</option>
              </select>
              <br><br>
              <h4>Doctor's Details</h4>
           </form>
                <p style="display: block; position: absolute; left: 50%; transform: translateX(-50%);" id="txtHint"></p>
                  
                  
                </table>

              

              
               </td>
             </tr>
            
    </table>            
    </div>
</div>
<script>
function showdoctor(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "../Controller/Doctor-control.php?q="+str);
  xhttp.send();
}
</script>

<?php include("foot.php"); ?>