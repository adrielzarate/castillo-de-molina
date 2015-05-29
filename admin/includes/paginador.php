<?php if($max_pag>1){ ?>
	<tfoot class="table table-striped table-editable no-margin">
		<tr>
			<td colspan="6">
				<ul class="pagination" style="margin:auto;">
					<?php if($page<1){ ?>
						<li class="disabled">
							<a href="#">《</a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="<?php echo $pagina; ?>?idioma=<?php echo $get['idioma'];?>&page=0&search=<?php echo $search; ?>&order=<?php echo $order; ?>&order_by=<?php echo $order_by; ?>">《</a>
						</li>
					<?php } ?>
					<?php if($page<1){ ?>
						<li class="disabled">
							<a href="#">〈</a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="<?php echo $pagina; ?>?idioma=<?php echo $get['idioma'];?>&page=<?php echo $page-1; ?>&search=<?php echo $search; ?>&order=<?php echo $order; ?>&order_by=<?php echo $order_by; ?>">〈</a>
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
								<a href="<?php echo $pagina; ?>?idioma=<?php echo $get['idioma'];?>&page=<?php echo $d; ?>&search=<?php echo $search; ?>&order=<?php echo $order; ?>&order_by=<?php echo $order_by; ?>"><?php echo $d+1; ?></a>
							</li>
						<?php } ?>
					<?php } ?>
					<?php if($page>$max_pag-2){ ?>
						<li class="disabled">
							<a href="#">〉</a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="<?php echo $pagina; ?>?idioma=<?php echo $get['idioma'];?>&page=<?php echo $page+1; ?>&search=<?php echo $search; ?>&order=<?php echo $order; ?>&order_by=<?php echo $order_by; ?>">〉</a>
						</li>
					<?php } ?>
					<?php if($page>$max_pag-2){ ?>
						<li class="disabled">
							<a href="#">》</a>
						</li>
					<?php }else{ ?>
						<li>
							<a href="<?php echo $pagina; ?>?idioma=<?php echo $get['idioma'];?>&page=<?php echo $max_pag-1; ?>&search=<?php echo $search; ?>&order=<?php echo $order; ?>&order_by=<?php echo $order_by; ?>">》</a>
						</li>
					<?php } ?>
				</ul>
			</td>
		</tr>
	</tfoot>
<?php } ?>