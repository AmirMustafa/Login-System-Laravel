<!-- Welcome to Homepage Aamir -->

	<style>
		table, th, tr, td {
			padding: 10px;
			background: #FFF;
		}

		#div1 {
			margin-left: 30%;
			margin-top: 2%;
			
			
		}

		#header {
			margin-left: 30%;
			margin-top: 3%;
		}

		body {
			background: lavender;
		}
	</style>

<div id="header">
	
	Welcome to Homepage <b><?php if(!empty(Session::get('Name'))) {
		echo Session::get('Name');		//receiving email via session stored name
	} ?></b>

	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="http://localhost:8888/laravel3/logout">Logout</a> <br>
	 <br>
	 <br>
	 <br>

</div>


	


	 <div id="div1">
	 	
<table style="border: 1px solid black;  border-collapse:collapse;">
  <tr style="border: 1px solid black; border-collapse:collapse;">
    <th style="border: 1px solid black; border-collapse:collapse;">Account</th>
    <th style="border: 1px solid black; border-collapse:collapse;">Name</th> 
    <th style="border: 1px solid black; border-collapse:collapse;">Email</th>
    <th style="border: 1px solid black; border-collapse:collapse;">Gender</th>
    <th style="border: 1px solid black; border-collapse:collapse;">Action</th>
  </tr>

  <?php foreach($data as $value){ ?>

  <tr>				 

  						{{--Way to comment in Blade: fetching value from db, select query in home function in controller --}}
    <td style="border: 1px solid black; border-collapse:collapse;"><?= $value->account;?></td>
    <td style="border: 1px solid black; border-collapse:collapse;"><?= $value->name;?></td> 
    <td style="border: 1px solid black; border-collapse:collapse;"><?= $value->email;?></td>
    <td style="border: 1px solid black; border-collapse:collapse;"><?= $value->gender;?></td>
    <td><a href="http://localhost:8888/laravel3/edit/<?= $value->id; ?>">Edit</a> | 
    	<a href="http://localhost:8888/laravel3/delete/<?= $value->id; ?>">Delete</td>
    									<!-- query string for this in route just get is req, no need to do post as well -->
  </tr>

  <?php } ?></a></table>

	 </div>


