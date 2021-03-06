<?php session_start();?>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Student Page</title>

<style>
body{
    background-color: #EBDEF0;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <a class="" href="logout.php">
            <button class="btn btn-primary float-right" type="submit">Logout</button></a>        
        </ul>
          <?php echo "Welcome ".$_SESSION["student"]."";?>
          <a class=""  href="chatpg_student.php">
          <button class="btn btn-primary float-right">Chat with mentor</button></a>
        </div>
      </nav>
      <br><br>
    <h3><center>English</center></h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Chapter Name</th>
            <th scope="col">PDF Link</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Grammar For Standard 7 </td>
                <td><a href="10_RitikaChaube.pdf">Grammar</a></td>
             </tr>
             <tr>
              <th scope="row"></th>
              <td>Grammar For Standard 8 </td>
              <td><a href="10_RitikaChaube.pdf">Grammar</a></td>
           </tr>
           <tr>
            <th scope="row"></th>
            <td>Grammar For Standard 9 </td>
            <td><a href="10_RitikaChaube.pdf">Grammar</a></td>
            </tr>
        </tbody>
        </thead>
    </table>

    <h3><center>Hindi</center></h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Chapter Name</th>
            <th scope="col">PDF Link</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> ????????????????????? ??????????????? 7 </td>
                <td><a href="10_RitikaChaube.pdf">?????????????????????</a></td>
             </tr>
             <tr>
              <th scope="row"></th>
              <td> ????????????????????? ??????????????? 8 </td>
              <td><a href="10_RitikaChaube.pdf">?????????????????????</a></td>
           </tr>
           <tr>
            <th scope="row"></th>
            <td> ????????????????????? ??????????????? 9 </td>
            <td><a href="10_RitikaChaube.pdf">?????????????????????</a></td>
            </tr>
        </tbody>
        </thead>
    </table>

    <h3><center>Mathematics</center></h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Chapter Name</th>
            <th scope="col">PDF Link</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Linear Expression for Standard 7</td>
                <td><a href="10_RitikaChaube.pdf">Linear Expression</a></td>
             </tr>
             <tr>
              <th scope="row"></th>
              <td>Linear Expression for Standard 8 </td>
              <td><a href="10_RitikaChaube.pdf">Linear Expression</a></td>
           </tr>
           <tr>
            <th scope="row"></th>
            <td>Linear Expression for Standard 9 </td>
            <td><a href="10_RitikaChaube.pdf">Linear Expression</a></td>
            </tr>
        </tbody>
        </thead>
    </table>

    <h3><center>Science</center></h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Chapter Name</th>
            <th scope="col">PDF Link</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Periodic Table for Standard 7 </td>
                <td><a href="10_RitikaChaube.pdf">Periodic Table</a></td>
             </tr>
             <tr>
              <th scope="row"></th>
              <td>Respiratory System for Standard 8 </td>
              <td><a href="10_RitikaChaube.pdf">Respiratory System</a></td>
           </tr>
           <tr>
            <th scope="row"></th>
            <td>Kinetic Theory for Standard 9 </td>
            <td><a href="10_RitikaChaube.pdf">Kinetic Theory</a></td>
            </tr>
        </tbody>
        </thead>
    </table>

    <h3><center>Social Studies</center></h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Chapter Name</th>
            <th scope="col">PDF Link</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Mughal Dynasty for Standard 7 </td>
                <td><a href="10_RitikaChaube.pdf">Mughal Dynasty</a></td>
             </tr>
             <tr>
              <th scope="row"></th>
              <td>Renaissance Period for Standard 8 </td>
              <td><a href="10_RitikaChaube.pdf">Renaissance Period</a></td>
           </tr>
           <tr>
            <th scope="row"></th>
            <td>Movements Across India for Standard 9 </td>
            <td><a href="10_RitikaChaube.pdf">Movements Across India</a></td>
            </tr>
        </tbody>
        </thead>
    </table>
        
    <br><br>
    
    <footer>
        <h5><center>
         <p>Copyrights:2020<br><p>Made By :Pratik Bhatt,Ritika Chaube and Parth Desai</p></h5></center>
    </footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>