<?php

require_once ('../model/model.php');
function fetchAllWardens()
{
	return showAllWardens();

}

function fetchAllPrisoners(){
	return showAllPrisoners();

}
function fetchPrisoner($id){
	return showPrisoner($id);

}

function fetchAllJailers(){
	return showAllJailers();

}
function fetchJailer($id){
	return showJailer($id);

}
function fetchAllLawyers(){
	return showAllLawyers();

}
function fetchLawyer($id){
	return showLawyer($id);

}
function fetch($username)
{
	return show($username);
}
?>