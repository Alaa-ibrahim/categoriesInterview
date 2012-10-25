<script>
$("document").ready(function(){

$("form").submit(function(e){
e.preventDefault();
$.post("<?php echo base_url();?>index.php/categories/editsave",$("form").serialize(),function(data){
$("#results").html(data).show();
});

});
});
</script>
<style>
#results{
display:none;
width:40%;
}
</style>
<div id="results" class="alert alert-success">
<?php //echo $errors;?>

</div>

<?php echo form_open('categories/editsave');
echo form_hidden('id',$cat->id);
$category=array(
		'name'=>'category',
		'id'=>'category_id',
		'value'=>$cat->category
	);
	
	echo form_input($category);
	echo form_label('Category Name','category');
	echo "<br/><br/>";
	

$dcat=array('0'=>'--Top Category--');
foreach($cats->result() as $c){
$dcat[$c->id]=$c->category;
}
	echo form_dropdown("parent",$dcat,$cat->parent);
	echo form_label("Subs from","parent");
	echo "<br/>";
	
	echo form_submit("submit","update");
	echo form_close();
