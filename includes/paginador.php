<?php if($max_pag>1){ ?>
				<ul class="pagination">
					<?php if($page<1){ ?>
						<li class="disabled">
							<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="javascript:void(0);" onclick="mostrarSeccion('news',0)" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
						</li>
					<?php } ?>
					<?php if($page<1){ ?>
						<li class="disabled">
							<a href="#" aria-label="Previous"><span aria-hidden="true">&lsaquo;</span></a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="javascript:void(0);" onclick="mostrarSeccion('news',<?php echo $page -1; ?>)" aria-label="Previous"><span aria-hidden="true">&lsaquo;</span></a>
						</li>
					<?php } ?>
					<?php for($i=0;$i<5;$i+=1){
							$d = $page+$i;
					?>
						<?php if($d == $page){?>
							<li class="active">
								<a href="#"><?php echo $d+1; ?></a>
							</li>
						<?php continue; } ?>
						<?php if($d > $max_pag-1){?>
							<li class="disabled">
								<a href="#">-</a>
							</li>
						<?php continue; } ?>
						<?php if($d != $page){?>
							<li>
								<a href="javascript:void(0);" onclick="mostrarSeccion('news',<?php echo $d; ?>)"><?php echo $d+1; ?></a>
							</li>
						<?php } ?>
					<?php } ?>
					<?php if($page>$max_pag-2){ ?>
						<li class="disabled">
							<a href="#" aria-label="Next"><span aria-hidden="true">&rsaquo;</span></a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="javascript:void(0);" onclick="mostrarSeccion('news',<?php echo $page + 1; ?>)" aria-label="Next"><span aria-hidden="true">&rsaquo;</span></a>
						</li>
					<?php } ?>
					<?php if($page>$max_pag-2){ ?>
						<li class="disabled">
							<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="javascript:void(0);" onclick="mostrarSeccion('news',<?php echo $max_page - 1; ?>)" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
						</li>
					<?php } ?>
				</ul>
<?php } ?>
