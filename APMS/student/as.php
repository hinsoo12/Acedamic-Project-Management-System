<?php
session_start();
?>
<section >
				<form method="post" action="">
						<center>
					 <div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Choose Your Department </label>
									<div class="col-lg-7">
                                        <select name="deppnma"  style="width: 100%; height:36px;">
                                            <option>Your Department</option>
                                            	<?php
                                            	include "conn.php";
							$res=mysqli_query($conn, "select * from department");
							while ($row = mysqli_fetch_array($res)) {
							$id =$row["id"];
							$depname = $row["name"];	
							?>
                               <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                	<label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                	<div class="col-lg-7">
                                	<input type="submit" name="subaaa" class="form-control btn btn-success">
                                </div>
                                </div>
						
					</center>
					</form>
				</div>
				<?php
				if (isset($_POST["subaaa"])) {
					
					 $_SESSION["deppnma"] = $_POST["deppnma"];
				
				?>
              <script type="text/javascript">
              	window.location = "form.php";
              </script>
				<?php
				}

				?>
			</div>
		</div>
	</section>