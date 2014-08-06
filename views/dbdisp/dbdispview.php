<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<style>

	body{
		margin-left: 20px;
		margin-right: 20px;
	}

	/*.btn:hover{
		background: blue;
		color: white;
		}*/

		a{
			text-decoration: none !important;
		}

/*		tbody tr{
			cursor: pointer;
		}
		*/

		tbody td button{
			color: black;
			text-decoration: none !important;
		}
		</style>

	</head>

	<body>

		<p>Page Begin</p>

		<div class="container-fluid">

			<div class="col-md-3">

				<h1> Database View </h1>

				<ul class="nav nav-pills nav-justified">

					<li class="<?php echo $c_all ?>"><a href="<?php echo site_url('dbdisplay/buildTable/0') ?> ">All years</a></li>
					<li class="<?php echo $c_1 ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$year1) ?>"><?php echo $year1 ?></a></li>
					<li class="<?php echo $c_2 ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$year2) ?>"><?php echo $year2 ?></a></li>
					<li class="<?php echo $c_3 ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$year3) ?>"><?php echo $year3 ?></a></li>

				</ul>
				
				<hr/>

				<ul class="nav nav-pills nav-stacked">

					<li class="<?php echo $c_full ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$current_year.'/') ?>">View full list</a></li>
					<li class="<?php echo $c_contact ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$current_year.'/3') ?>">Yet to be contacted</a></li>
					<li class="<?php echo $c_search ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$current_year.'/1') ?>">Yet to be searched</a></li>
					<li class="<?php echo $c_dumped ?>"><a href="<?php echo site_url('dbdisplay/buildTable/'.$current_year.'/2') ?>">Dumped</a></li>

				</ul>

			</div>

			<div class="col-md-9">

				<h1> <?php echo $count ?> rows fetched. </h1>

				<table class="table table-bordered table-striped">

					<thead class="active">
						<th> Alumni ID
						</th>
						<th> Year
						</th>
						<th> Name
						</th>
						<th> Hall
						</th>
						<th> Dept
						</th>
						<th> Next Follow Up
						</th>
						<th> Last Date of Calling
						</th>
						<th>
						</th>

					</thead>

					<tbody>

						<?php foreach($all as $row): ?>

						<tr>

							<td>

								<?php echo $row['alumid'] ?> 

							</td>
							<td> <?php echo $row['alumSince'] ?> 
							</td>
							<td> <?php echo $row['name'] ?> 
							</td>
							<td> <?php echo $row['hall'] ?> 
							</td>
							<td> <?php echo $row['dept'] ?> 
							</td>
							<td> <?php echo $row['followup'] ?> 
							</td>
							<td> <?php echo $row['lastdate'] ?> 
							</td>
							<td>
								<a href="<?php echo site_url('profilefetch/showstatus/'.$row['alumid']) ?>">
									<button class="btn btn-primary">								
										Status
									</button>
								</a> <p>   </p>
								<a href="<?php echo site_url('profilefetch/showprofile/'.$row['alumid']) ?>">
									<button class="btn btn-success">								
										Profile
									</button>
								</a>

							</td>

						</tr>

						<!-- </a> -->

					<?php endforeach ?>

				</tbody>	

			</table>

		</div>

	<!-- <div class="">

</div> -->

</div>

<br/><p>Page End</p>

</body>

</html>