<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Social Network</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>
	.navbar-nav li{
		margin-right:25px;
	}
	#coverpic{	
		background: url({{asset('social/cover/cover.png')}});
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	.shadow-lg0 {
		box-shadow: 0 1rem 2.5rem rgba(0,0,0,.175)!important;
	}
	footer.page-footer {
		margin-top: 20px;
		padding-top: 20px;
		color: #fff;
	}
	footer.page-footer a {
		color: #fff;
	}
	.primary-color {
		background-color: #4285F4!important;
	}
	</style>
</head>
<body> 
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark sticky-top" style="padding:0.05rem 1rem !important;">
	<a class="navbar-brand" href="#">My Social Network</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{url('/')}}">
					<!-- <i class="fa fa-user"><span class="badge"></span></i>Profile -->
					<div class="media">
						<img src="" class="rounded-circle align-self-center mr-2" style="width:35px">
						<div class="media-body pt-1">
							<h6>{{ Auth::user()->name }}</h6>
						</div>
					</div>
				</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="{{url('/')}}">
					<i class="fa fa-home"></i>Home<span class="sr-only">(current)</span>
				</a>
			</li>			
			<li class="nav-item">
				<a class="nav-link" href="{{ url('/chatify') }}">
					{{-- <i class="fa fa-envelope-o"><span class="badge badge-danger">11</span></i>Messages --}}
                    <i class="fa fa-envelope-o"></i> Messages
				</a>
			</li>		
			<li class="nav-item">
				<a class="nav-link disabled" href="{{route('list.abal')}}">
					{{-- <i class="fa fa-flag"><span class="badge badge-danger">11</span></i>Notifications --}}
                    <i class="fa fa-flag"></i> User List
				</a>
			</li>
		</ul>    
	</div>
</nav>

<div class="container jumbotron text-center" style="margin-bottom:0;padding-bottom:1rem;height:auto;color:#fff;border-radius:0px;" id="coverpic">
	<div class="clearfix">
		<div class="profile_pic float-sm-left">
			<img src="{{Avatar::create(Auth::user()->name)->toBase64();}}" alt="" class="rounded-circle" style="height:150px;width:150px;border:5px solid #fff;"> 
		</div>
		<div class="float-sm-left ml-1 mt-4">
			<h2>{{ Auth::user()->name }}</h2>
		</div>
	</div>
	<div class="clearfix">
		<div class="float-sm-right ml-1">
			<button type="button" class="btn"><i class="fa fa-check" style="color:blue;"></i>Add Friend</button>
			<button type="button" class="btn btn-primary"><i class="fa fa-rss"></i> Follow</button>
			<a href="{{ url('/chatify') }}" class="btn btn-info"><i class="fa fa-envelope-o"></i> Message</a>
		</div>
	</div>
</div>
<div class="container card shadow"style="border-radius:0px 0px 5px 5px;padding:0px 5px 0px 50px;">
	<!-- Nav tabs -->	
	<ul class="nav nav-tabs float-sm-left">
	  <li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#home">Timeline</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#">About</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#">Friends</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#">Photos</a>
	  </li>
	</ul>
</div>

<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-sm-3">
			<div class="card shadow">
				<div class="card-body">
					<h5><i class="fa fa-globe"></i> Intro</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
				<ul class="list-group list-group-flush">
                    <li class="list-group-item">
						<h6><i class="fa fa-graduation-cap"></i> Went to <span class="">MIMIT Malout</span></h6>
						<h6><i class="fa fa-home"></i> Live in <span class="">Malout</span></h6>
						<h6><i class="fa fa-map-marker"></i> Live in <span class="">Malout</span></h6>
						<h6><i class="fa fa-heart"></i> single</h6>
                        
                    </li>                   
                </ul>
            </div><!-- 1st card end here -->
			<div class="card mt-2 shadow">                
				<div class="card-body">
					<h5 class="card-title"><i class="fa fa-picture-o"></i> Photos</h5>					
				  <!-- photos -->
					<div class="">
						<img src="" class="m-1" style="width:60px">
						<img src="" class="m-1" style="width:60px">
						<img src="" class="m-1" style="width:60px">
						<img src="" class="m-1" style="width:60px">
						
						<img src="" class="m-1" style="width:60px">
						<img src="" class="m-1" style="width:60px">
					</div>					
                </div>
            </div> <!-- 2nd card end here -->
			<div class="card mt-2 shadow">
                <div class="card-body">
					<h5 class="card-title"><i class="fa fa-users"></i>Friends</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">This Feature Is Under Development Mode</p>
                </div>
            </div>                		
		<!-- ======================== Side bar profile end below ======================= -->
		</div>		
		<div class="col-sm-6">
		<!-- ======================== Make a post section start ======================= -->
			<div class="card shadow">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control publication" id="publications" name="publication" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary share_publication">share Now</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Only me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<!-- //////////  Posts/ NewsFeed start here  /////////////////// -->
			
			@foreach ($publication as $public)
			<!-- \\\\\\\Post -->
                <div class="card mt-2 shadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ml-2">
                                    <div class="h5 m-0">{{$public->name}}</div>                                  
									<div class="text-muted mb-2"><i class="fa fa-clock-o"></i> {{$public->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <p class="card-text">
                            {{$public->publication}}
                        </p>
                    </div>
                    <div class="card-footer">
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="card-link"><i class="fa fa-thumbs-o-up"></i> <?php //echo $like_count;?> Like</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="card-link" data-toggle="collapse" data-target="#comment<?php //echo $comm_id;?>"><i class="fa fa-comment"></i>Comment</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
							</div>
						</div>
					<!-- comment karo -->
						{{-- <div id="comment<?php //echo $comm_id;?>" class="collapse">
							<!-- comment iterartion start here -->
							<div class="media pt-1">
								<img src="users/img/femaleAvatar.png" class="mr-3 mt-1 rounded-circle" style="width:40px;">
								<div class="media-body">
									<p class="mb-0"><strong>XYZ </strong><small><i>Posted on November 20, 2018</i></small></p>
									<p>Lorem ipsum dolor sit amet, consectetur dolore magna aliqua.</p>
									<div class="media p-1">
										<img src="" class="mr-3 mt-1 rounded-circle" style="width:40px;">
										<div class="media-body">
											<p class="mb-0"><strong>Anupam </strong> <small><i>Posted on November 20 2016</i></small></p>
											<p>Lorem ipsum dolor sit amet, idunt ut  magna aliqua.</p>
										</div>
									</div>  
								</div>
							</div>
							<!-- comment iteration end here -->
						</div> --}}
                    </div><!-- card footer end here--->
                </div>
                <!-- Post ///// -->
				@endforeach
			
	
		<!-- //////==============--   Col-sm 8- end below ////// =============/////--- ///// -->			
		</div>
		<div class="col-sm-3">
			<!-- ///////   left side bar start above  ////////////// -->
			<div class="card shadow-lg">
				<div class="card-body">
					<h6 class="card-title">Your Contacts</h6>
					<!-- contacts db start here -->
					{{-- <div class="chip">
					  <img src="" alt="Person" width="96" height="96">
					  <h6>Abhinav  <span class="float-sm-right"><i class="fa fa-circle text-success"></i></span></h6>					  
					</div> --}}
                    <div class="chip">
					  <h5>No Contents Found</h5>				  
					</div>
					<hr>
					<hr>
					<!-- contacts db end here -->
                </div>				
            </div>		
		<!-- ======================== Right Side bar profile end below ======================= -->
		</div>
	</div>
</div>

<footer class="page-footer pt-0">
    <div class="primary-color">
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-12 col-lg-12 text-center mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Developed By :- Tanvir Hasan Tonmoy</h6>
                </div>
            </div>
			<div class="row pt-3 pb-3">
                <div class="col-md-12 col-lg-12 text-center mb-4 mb-md-0">
                    <a class="li-ic" href="https://www.linkedin.com/in/tanvir-hasan-9a8100209/"><i class="fa fa-linkedin white-text mr-4"></i></a>
                    <a class="fb-ic ml-0" href="https://www.facebook.com/tanvir441/"><i class="fa fa-facebook-square white-text mr-4"></i></a>
                    <a class="gplus-ic" href="#"><i class="fa fa-google-plus white-text mr-4"></i></a>					
                    <a class="ins-ic" href="https://www.instagram.com/tonmoy_hasan__/" ><i class="fa fa-instagram white-text mr-4"></i></a>
                </div>
            </div>			
        </div>
    </div>  
</footer>
<script>
    // $(document).ready(function(){
    //     show_publication();
    //     Data show function start here
    //     function show_publication(){
    //             $.ajax({
    //               type: 'GET',
    //               url : '/show-publication',
    //               dataType : 'json',
    //               success : function(response){
    //                 // $('tbody').html('');
    //                 // $.each(response.abals, function(key, item){
    //                 //     $('tbody').append('<tr>\
    //                 //                         <td>'+key+'</td>\
    //                 //                         <td>'+item.abal_name+'</td>\
    //                 //                         <td>'+item.abal_email+'</td>\
    //                 //                         <td><button value="'+item.id+'" class="delete_abal btn btn-danger btn-sm" onclick="deleteData('+item.id+')">Delete</button></td>\
    //                 //                     </tr>');
    //                 //});
    
    //                 }
    //              });
    //         }
            //  Data show end function end here

            $(document).on('click', '.share_publication', function(e){
            e.preventDefault();
				
            var data = {
                'publication': $('.publication').val(),
            }
			//console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

           var publications = $('#publications').val();
            $.ajax({
                type    :'POST',
                url     :'/insert/publication',
                data    : {
                    publication  : publications,
                        },
                dataType: "json",
                
                success:function(response){
                      $('#posts').find('textarea').val("");
                      window.location.reload();
            	}  
            });

        });

    // });

</script>

</body>
</html>