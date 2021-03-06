<html>
<head>
<style>
*{margin:0; padding:0; box-sizing:border-box; font-family: 'Josefin sans' , sans-serif;}
   .header{
	
	width:100%;
	height:100vh;
	background-image: url('../images/farmer.jpg');
	background-repeat:no-repeat;
	background-image: 100% ;


	background-size:100%,100%;
	} 
.mainheader{
	width: 100%;
	display: flex;
	justify-content: space-between;
	padding-top: 25PX;

}


.mainheader nav{
	width: 400px;
	
	display:flex;
	justify-content: space-around;
	align-items: center;
	float: right;

	}
	
.mainheader nav a{
	text-decoration: none;
	color: #fff;
	text-transform: uppercase;
	transition: 0.6s ease;

	
} 
nav a:hover{
	background-color: #fff;
	color: green;
	padding: 5px 2px; 

} 
.navbar-brand:hover{
	background-color:black;
}
.nav-link:hover{
	color: #fff;
	background-color: green;
}

 .title{
	top:65%;
	left: 25%;
	position: absolute;
}
.title h1 {
	font-size: 50px;
	color: #fff;
}
.button{
	top:80%;
	left: 45%;
	position: absolute;
	transform: translate3d(-50%,-50%);
}
.btn{
	border: 2px solid #fff;
	color: #fff;
	text-decoration: none;
	background-color: #099827;


}
.btn:hover{
	background-color: #fff;
	color :#000;
	border: 2px solid green;
}
.logo{
	width: 30%;
	color: #fff;
	background-image: linear-gradient(#32D908 40%, #099827 60%);
	padding-left: 100px;
	box-sizing: border-box;
}
.logo h1{
	text-transform: uppercase;
	font-size: 1.6rem;
	animation: aagepiche 2s linear infinite;
	animation-direction: alternate;

}
@keyframes aagepiche{
	from{padding-left: 50px;}
	to {padding-right: 50px;}
}



/*****Triple-T start*****/

.tripleT {
	  width:100%;
	  height:auto;
	 margin-bottom: 50px;
	 
}


.tri{
	border-radius: 50%;
}

.cardT-header1 , .cardT-header2 , .cardT-header3{


	   display:flex;
	  justify-content:center;
	  align-items:center;
	  background-color: black;
	  color: #fff;
	  width: 350px;
	  height: 150px;

	  
}
.cardT img{
	border-radius: 50%;
	margin-right: 30px;
}






.cardT-body li{
	margin:10px;
	  font-size:15px;
	  font-weight:400;
	  line-height:1.6;
	  color:#606060;
	  list-style:none;
	  text-align: left;
}


/****Hygiene Shield start****/
.hygiene{
	  width:100%;
	  height:auto;
	  padding-bottom:50px;

	  position:relative;
	  background-color: #f7f7f9;
}

.hygiene-header{
	  text-align: center;
	  background-color:green;
	  color: #fff;
	  padding: 40px;
	  margin-bottom: 40px;
}
.hygiene-body{
	padding:10px;
	
}
h6{
	font-weight: bold;
	font-size: 1.2rem;
}
.hygiene-body p{

padding-bottom:  50px;
}





/*****service start*****/
.room{
	background:linear-gradient(150deg,#FFE2C8 60%,#fff 0%);

}
.food img{

	clip-path:polygon(30% 0%,100% 40%,60% 100%,0%75%);

}
.foodservice{
	background:linear-gradient(310deg,#E3B9FF 60%,#fff 0%);
	 padding-top: 130px;
}



.shilpi {
		display:flex;
	  justify-content:center;
	  align-items:center;
	  background-color: black;
	  color: #fff;


}
.list{
	background-color: #f7f7f9;
}
.list h1{
	
	font-size: 100px;
	padding-right:  20px;
}

.list h2{
	
	font-size: 1.9rem;

}

.service2{
	  width:100%;
	  height:100vh;
	  padding:30px;

	  position:relative;
	  
  }
  .service2 h3{
	  padding:20px;
  }
  .service2:before{
	content:"";
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	right:0;
	z-index:-1;
	background:linear-gradient(-150deg,#C3FFFB 55%,#fff 0%);
	
}

  .card{
	  transition:0.4s ease;
  }
  .card-header{
	  font-size:1.6rem;
	  font-weight:bold;
	  background:#fff!important;
	  padding:25px!important;
  }
  .card-body{
	  padding:30px!important;
  }
  
  .card-footer{
	  padding:25px;
  }
 .card-footer a{
			border:1px solid #50d1c0;
			border-radius:100px;
			margin:0 5px;
			padding:12px 20px;
			outline:none;
			color:#000000;
			font-size:1rem;
			font-weight:400;
			text-align:center;
			
}
.card:hover .card-footer a{
				color:#fff;
				background:#50d1c0;
				text-decoration:none;
				box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
}
.card:hover{
	transform:translateY(-30px);
	box-shadow:0 0 20px 0 rgba(0,0,0,0.3);
}
.card:hover .card-header , .card:hover .money{
	color:#50d1c0;
}

/***footer start***/
	.footersection{
		width: 100%;
		height: auto;
		padding: 50px 0 20px 0;
		background:#000;
		position: relative;

	}
	.footersection p {
		color:#fff;

	}
	.footersection li a {
		font-size:0.9rem;
		line-height: 1.6;
		font-weight: 400;
		color: #fff;
		
		
		
	}
	.footersection h3 {
		font-size:1.2rem;
		margin-bottom: 25px;
		font-weight: 600;
		color: #fff;
		text-transform: uppercase;

	}
	.footersection li{
		list-style: none;
		
	}
	.list-group i{
		color: #fff;
		align-items: center;


	}
	.list-group  {
	align-items: center;
	display:inline-block;
	justify-content:center;
	margin:0px 600px 20px ;
	padding: 0px 0 20px 0;
	word-spacing: 20px;
	}



	/****footer end***/
	/*****about start*****/
	.abouthead{
		background-color: black;
		
	


	}
	.abouthead h1{

		font-size: 2rem;
		text-align: center;
		padding-top: 25px;
		padding-bottom: 15px;
		color: #DAA520;

	}
	.abouthead p{
		justify-content: center;
		text-align:justify;
		color: white;
		padding-right: 25px;
	}
	.abouthead span{
		color: #DAA520;
		text-align:right;
		font-size: 1.0rem;
	}
	/******about end ******/


  /**********contact start****************/
  .contact{
	  
	  padding:40px 0;
	  margin-bottom:50px;  
	  
	  width:100%;
	  height: auto;
	
	background-repeat:no-repeat;
	background-image: 100% 100%;



  }
  .contact1{
  	background-image: url('../images/newcontact.png');
  }

  
  .contactus{
	  width:100%;
	  height:70vh;
	  padding:50px 0;
	  position:relative;
	  background:linear-gradient( #099827 100%,#fff 0%);
	  margin-top:50px;

  }
  
  .contactus:before{
	content:"";
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	right:0;
	z-index:-1;
	
	
	
}
.servicediv{
	margin-top:80px;
}
.servicediv h3{
	font-size:20px;
}

.form-button button{
			border:1px solid #50d1c0;
			border-radius:100px;
			margin:0 5px;
			padding:12px 20px;
			outline:none;
			color:#50d1c0;
			font-size:1rem;
			font-weight:400;
			text-align:center;
			background:transparent;
			
}

form:hover .form-button button{
				color:#50d1c0;
				background:#fff;
				text-decoration:none;
				box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
}

::placeholder{
	font-size:0.85rem;
}
</style>
</head>

</html>