<?php
if($_GET['module']=='home'){
	echo"<div class='content-tittle'>Welcome</div>";
	echo"<h1>Welcome to Cornellekacy Online School Registration System</h1>
		<img src='assets/img/page/1.png'  class='floatLeft' style='width:250px;display:block;'>";
	echo"<p><p>Welcome to Cornellekacy online school registration page. We as a community of programmers and developers in cameroon under the cornellekacy team have decided to take the programming and web development to the next level. we offer full time online courses on full stack web development (html,css,javascript,php and mysql), and full time programming lessons on languages such as (pascal,python, perl, java, c++ and c), and most importantly we have lesson on how to go about free internet with our local ISPs. to study with us signup and experience the world of online studies.</p>";
}

elseif($_GET['module']=='registrasi'){
?>
<div class='content-tittle'>Registration Form</div>
			<form action='registrasifinal.html' method='post' enctype='multipart/form-data'>

			<div class="form-group">
			    <label for="fname">First Name</label>
			    <input type="text" class="form-control" id="fname" name="fname">
			  </div>
			  <div class="form-group">
			    <label for="lname">Last Name</label>
			    <input type="text" class="form-control" id="lname" name="lname">
			  </div>
			  <div class="form-group">
			  <label for="pob">Place of Birth</label>
			    <input type="text" class="form-control" id="pob" name="pob">
			  </div>
			  <div class="form-group">
			    <label for="tanggal">Date of Birth</label>
			    <input type="text" class="form-control" id="tanggal" name="tanggal">
			  </div>
			  <div class="form-group">
			    <label for="text">Region of Origin</label>
			    <input type="roo" class="form-control" id="roo" name="roo">
			  </div>
			   <div class="form-group">
			  <label for="sel1">Level of Education</label>
			   <select class="form-control" id="lof" name="lof">
			   <option>Select...</option>
			    <option value="First school">First school</option>
			    <option value="Ordinary Level">Ordinary Level</option>
			    <option value="Advance Level">Advance Level</option>
			    <option value="Higher National Diploma(HND)">Higher National Diploma(HND)</option>
			    <option value="Bachelors Degree">Bachelors Degree</option>
			   </select>
			  </div>
			  <div class="form-group">
			   <label for="sel1">Field of Interest</label>
			   <select class="form-control" id="foi" name="foi">
			   <option>Select...</option>
			    <option value="Web Dvelopment (Front-end)">Web Dvelopment (Front-end)</option>
			    <option value="Web Dvelopmen (back-end">Web Dvelopmen (back-end)</option>
			    <option value="Web Dvelopmen (full-stack)">Web Dvelopmen (full-stack)</option>
			    <option value="Programming c">Programming c</option>
			    <option value="Programming Python">Programming Python</option>
			    <option value="Programming c++">Programming c++</option>
			    <option value="Programming Pascal">Programming Pascal</option>
			    <option value="Programming Perl">Programming Perl</option>
			    <option value="ISP Hacking">ISP Hacking</option>
			   </select>
			  </div>
			  <div class="form-group">
			  <label for="sel1">Gender</label>
			   <select class="form-control" id="gender" name="gender">
			   <option>Select...</option>
			    <option value="Female">Female</option>
			    <option value="Male">Male</option>
			   </select>
			  </div>
			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="text" class="form-control" id="address" name="address">
			  </div>
			  <div class="form-group">
			    <label for="region">Region</label>
			    <input type="text" class="form-control" id="region" name="region">
			  </div>
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="text" class="form-control" id="city" name="city">
			  </div>
			  <div class="form-group">
			    <label for="contact">Contact line 1</label>
			    <input type="text" class="form-control" id="contact" name="contact1">
			  </div>
			  <div class="form-group">
			    <label for="contact">Contact line 2</label>
			    <input type="text" class="form-control" id="contact" name="contact2">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email">
			  </div>
			  <button type="submit" class="btn btn-success">Register</button>
				</form>			
<?php
}
elseif($_GET['module']=='kontak'){
echo"<div class='content-tittle'>Contact Us</div>";
echo"<form action= method=post>";
echo"<label>Name</label>
		<input type='text' name='nama' class='input-xlarge' />	
	<label>Email</label>
		<input type='text' name='email' class='input-xlarge' />	
	<label>Message</label>	
		<textarea namae=isi class='input-xlarge'></textarea>
		
	<div class='btn-toolbar'>
		<button class='btn btn-primary'><i class='icon-save'></i> Send</button>
		<div class='btn-group'></div>
	</div>
</form>";
}

?>
