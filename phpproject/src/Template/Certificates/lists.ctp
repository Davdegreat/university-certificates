	<div class="row">
		<div class="col-sm-10"><?php echo $this->Html->link('Create certificate',array('controller'=>'colleges','action'=>'issuecertificate'),array('class'=>'btn btn-primary btn-sm')) ; ?></div>
    </div>
	<div class="widget widget-inverse">
			<div class="widget-head">
				<h4 class="heading">Certificates</h4>
			</div>
			<div class="widget-body">
				<table class="table table-condensed">
					<thead>
						<tr>
						    <th scope="col"><?php echo 'S No.' ?></th>
							<th scope="col"><?php echo 'Aadhaar Number' ?></th>
							<th scope="col"><?php echo 'Mobile' ?></th>
							<th scope="col"><?php echo 'Student Public Key' ?></th>
							<th scope="col"><?php echo 'Status' ?></th>
							<th scope="col" class="actions"><?php echo  __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
					    <?php 
                            $i =1 ;
							
     						foreach ($certificates as $certificate):
							   $statusid = $certificate['status'] ;
							   if($statusid=='1'){
							      $status ="Approved";
							   } else if($statusid=='2'){
							      $status ="Deployed";
							   } else {
							      $status ="Request";
							   }
							 ?>
						 <tr>
							<td><?php echo $i ?></td>
							<td><?php echo $certificate->adhar_number ; ?></td>
							<td><?php echo $certificate->mobile ; ?></td>
							<td><?php echo $certificate->student_public_key ; ?></td>
							<td><?php echo $status ; ?></td>
							<td class="text-right1">
								<div class="btn-group btn-group-xs ">
								    <?php echo $this->Html->link("<i class='fa fa-eye'></i>",array('controller'=>'certificates','action'=>'detail',$certificate['id']),array('class'=>'btn btn-inverse','escape'=>false,'title'=>'View Certificate')) ; ?>
								</div>
							</td>
						</tr>
						   <?php $i++ ; endforeach; ?>
					</tbody>
				</table>
			</div>
	</div>