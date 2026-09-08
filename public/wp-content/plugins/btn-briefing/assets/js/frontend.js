'use strict';

var $doc = document,
    btnBriefingData = {},
    $btnBriefingModal = null,
    $parentElement = null,
    $searchForm = null,
    $inputValue  = '',
    $ratingSelector = null,
	startdate = '';


// Document ready
var btnBriefingReady = function btnBriefingReady(callBack) {
  if ($doc.readyState !== 'loading') {
    callBack();
  } else if ($doc.addEventListener) {
    $doc.addEventListener('DOMContentLoaded', callBack);
  } else {
    $doc.attachEvent('onreadystatechange', function() {
      if ($doc.readyState === 'complete') {
        callBack();
      }
    });
  }
};

// Dom Ready
btnBriefingReady(function() {
  if (typeof btn_briefing_data !== "undefined") {
      if (btn_briefing_data.hasOwnProperty('btn_briefing_shortcode')) {
          btnBriefingData = btn_briefing_data.btn_briefing_shortcode;
          var btnBriefingInit = btnBriefing(btnBriefingData);
          btnBriefingInit.init();

      }
  }

});

var btnBriefing = function(data) {
  var thisBriefing;
  return {
    init: function() {
      thisBriefing = this;
      thisBriefing.pagination();
      thisBriefing.favoriteAndComplete();
      thisBriefing.assignedTrainingCarousel();
	  //thisBriefing.assignTrainingReport();
	  startdate  = new Date().toISOString().slice(0, 19).replace('T', ' ');
	  
		
		// Initialize the Video.js player
		const videoElement = document.getElementById('my-video');

		if (videoElement) {
			const player = videojs('my-video');
			const completionThreshold = (typeof btn_briefing_data !== 'undefined' && btn_briefing_data.completion_threshold)
				? parseFloat(btn_briefing_data.completion_threshold)
				: 0.75;
			var hasAutoCompleted = (typeof btn_briefing_data !== 'undefined' && !!btn_briefing_data.already_completed);

			player.on('timeupdate', () => {
				if (hasAutoCompleted) return;

				var duration = player.duration();
				if (!duration || isNaN(duration)) return;

				var percentWatched = player.currentTime() / duration;
				if (percentWatched < completionThreshold) return;

				hasAutoCompleted = true;
				var id = btn_briefing_data.post_id;
				if(id > 0){
					btnBriefingPreLoader('Loading...');
					setTimeout(function(){
						var $this = document.querySelector(".btn-briefing-add-to-complete");
						btnBriefingPost( {
							action       :'btn_briefing_complete_action',
							post_id      : id,
							start_date   : startdate
						}, function(response){
							if(response.success){
								$btnBriefingModal.remove();
								if ($this) {
									$this.classList.remove("btn-briefing-add-to-complete");
									$this.classList.add("btn-briefing-completed");
									$this.textContent = "You have completed this training block";
								}
								videoElement.classList.add('completed-video');
							}
						});
					}, 300);
				}
			});

			player.on('play', () => {
				videoElement.classList.remove('completed-video');
			});
		}

	 //var player = videojs('my-video');
			/*
		player.on('loadedmetadata', function() {
			// Create a canvas element to capture the frame
			var canvas = document.createElement('canvas');
			var context = canvas.getContext('2d');
			canvas.width = player.videoWidth();
			canvas.height = player.videoHeight();

			// Seek to the desired time (e.g., 2 seconds)
			player.currentTime(2);

			player.on('seeked', function() {
				// Draw the current frame to the canvas
				context.drawImage(player.el().querySelector('video'), 0, 0, canvas.width, canvas.height);

				// Convert the canvas to a data URL
				var dataURL = canvas.toDataURL('image/jpeg');

				// Set the poster attribute with the captured frame
				player.poster(dataURL);

			});
		});*/
    },
	assignTrainingReport : function(){ 
		  //select.btn-briefing-wrapper-reporting-status
	},
    favoriteAndComplete : function(){
      $doc.addEventListener('click', function(event) {
        //Add to Favorites
        if(event.target.matches('.btn-briefing-add-to-favorite')){
            event.preventDefault();
            var $this = event.target;
            var id =  event.target.getAttribute("data-id");
                btnBriefingPreLoader('Loading...');
                setTimeout(function(){
                  btnBriefingPost( {
                      action       :'btn_briefing_add_to_favorite_action',
                      post_id      : id
                  }, function(response){
                    if(response.success){
                        $btnBriefingModal.remove();
                        $this.classList.remove("btn-briefing-add-to-favorite");
                        $this.classList.add("btn-briefing-remove-to-favorite");
					    $this.textContent = "Remove from Favorites";
                    }
                  });
                }, 300);
          }

        //   if(event.target.matches('.btn-briefing-hide-action-page')){
        //       event.preventDefault();
        //       var $this = event.target;
        //       var dataAction =  event.target.getAttribute("data-action"),
        //           type =  event.target.getAttribute("data-type"),
        //           value =  event.target.getAttribute("data-value"),
        //           agencyID =  event.target.getAttribute("data-agency-id");
        //           btnBriefingPreLoader('Loading...');
        //           setTimeout(function(){
        //             btnBriefingPost( {
        //                 action  :'btn_briefing_hide_action',
        //                 value : value,
        //                 type : type,
        //                 agencyID : agencyID,
        //                 dataAction: dataAction
        //             }, function(response){
        //               if(response.success){
        //                   if(dataAction == 'unhide'){
        //                       $this.textContent = "Hide Video";
        //                       $this.setAttribute("data-action","hide");
        //                       $this.classList.add("btn-hide");
        //                       $this.classList.remove("btn-unhide");
        //                   }
        //                   else{
        //                       $this.textContent = "Unhide Video";
        //                       $this.setAttribute("data-action","unhide");
        //                       $this.classList.add("btn-unhide");
        //                       $this.classList.remove("btn-hide");
        //                   }
        //                   $btnBriefingModal.remove();
        //               }
        //             });
        //           }, 300);
        //   }

        //   if(event.target.matches('.btn-briefing-hide-action')){
        //       event.preventDefault();
        //       var $this = event.target;
        //       var dataAction =  event.target.getAttribute("data-action"),
        //           type =  event.target.getAttribute("data-type"),
        //           value =  event.target.getAttribute("data-value"),
        //           agencyID =  event.target.getAttribute("data-agency-id");
        //           btnBriefingPreLoader('Loading...');
        //           setTimeout(function(){
        //             btnBriefingPost( {
        //                 action  :'btn_briefing_hide_action',
        //                 value : value,
        //                 type : type,
        //                 agencyID : agencyID,
        //                 dataAction: dataAction
        //             }, function(response){
        //               if(response.success){
        //                   if(dataAction == 'unhide'){
        //                       $this.textContent = "hide";
        //                       $this.setAttribute("data-action","hide");
        //                       $this.classList.add("btn-hide");
        //                       $this.classList.remove("btn-unhide");
        //                   }
        //                   else{
        //                       $this.textContent = "unhide";
        //                       $this.setAttribute("data-action","unhide");
        //                       $this.classList.add("btn-unhide");
        //                       $this.classList.remove("btn-hide");
        //                   }
        //                   $btnBriefingModal.remove();
        //               }
        //             });
        //           }, 300);
        //   }

          if(event.target.matches('.btn-briefing-remove-to-favorite')){
              event.preventDefault();
              var $this = event.target;
              var id =  event.target.getAttribute("data-id");
                  btnBriefingPreLoader('Loading...');
                  setTimeout(function(){
                    btnBriefingPost( {
                        action       :'btn_briefing_remove_to_favorite_action',
                        post_id      : id
                    }, function(response){
                      if(response.success){
                          $btnBriefingModal.remove();
                          $this.classList.remove("btn-briefing-remove-to-favorite");
                          $this.classList.add("btn-briefing-add-to-favorite");
  					    $this.textContent = "Add to Favorites";
                      }
                    });
                  }, 300);
            }

            //Mark as complete
            if(event.target.matches('.btn-briefing-add-to-complete')){
                event.preventDefault();
                var $this = event.target;
                var id =  event.target.getAttribute("data-id");
                    btnBriefingPreLoader('Loading...');
                    setTimeout(function(){
                      btnBriefingPost( {
                          action       :'btn_briefing_complete_action',
                          post_id      : id,
						  start_date   : startdate
                      }, function(response){
                        if(response.success){
                            $btnBriefingModal.remove();
                            $this.classList.remove("btn-briefing-add-to-complete");
                            $this.classList.add("btn-briefing-completed");
                           $this.textContent = "You have completed this training block";
                        }
                      });
                    }, 300);
              }
      }, false);
    },
    pagination : function(){
	document.addEventListener('click', function(event) {
		  if(event.target.matches('.page-numbers')){
			  event.preventDefault();
			  var pageURL =  event.target.getAttribute("href"),
				  pageNum = pageURL.substr(pageURL.lastIndexOf('/') + 1),
				  newStatus = data.newStatus,
				  postPerPage = data.posts_per_page,
				  pagination = data.pagination,
			      assignment = (btn_briefing_data.btn_briefing_shortcode_post_assignment.assignment) ? 1:0;
			 	 console.log(assignment);
			    var container =  event.target.closest(".btn-briefing-container"); 
				  btnBriefingPreLoader('Loading...');
				  setTimeout(function(){
					btnBriefingPost( {
						action        : 'btn_briefing_action',
						type          : 'pagination',
						paged         : pageNum,
						posts_per_page : postPerPage,
						pagination: pagination,
						new: newStatus,
						assignment : assignment
					}, function(response){
					  if(response.success){
						  $btnBriefingModal.remove();
						  console.log(response.data);
						  var $container = container;
							//  $selectorContainer = document.querySelector(".btn-ctc-toolbox-select-topic"),
							console.log($container);
							var html = response.data.html;
							//selectorHtml = response.data.selector;
							$container.innerHTML = html;
						  	$container.scrollIntoView({ behavior: 'smooth' });
							//window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", pageURL);

					  }
					});
				  }, 300);
			}
		}, false);

    },
    assignedTrainingCarousel : function(){
	  var wrappers = document.querySelectorAll('.btn-briefing-carousel-wrapper');
	  wrappers.forEach(function(wrapper){
		  var track = wrapper.querySelector('.btn-briefing-carousel-track'),
			  nextBtn = wrapper.querySelector('.btn-briefing-carousel-next'),
			  visible = parseInt(wrapper.getAttribute('data-visible'), 10) || 3,
			  realSlides = Array.prototype.slice.call(track.children),
			  total = realSlides.length;

		  if (!nextBtn || total <= visible) {
			  if (nextBtn) { nextBtn.style.display = 'none'; }
			  return;
		  }

		  // Clone the first `visible` slides and append them so advancing past
		  // the real slides scrolls into a duplicate set, then snaps back to 0
		  // without a transition to fake a seamless infinite loop.
		  realSlides.slice(0, visible).forEach(function(node){
			  track.appendChild(node.cloneNode(true));
		  });

		  var index = 0,
			  animating = false;

		  var getVisibleCount = function(){
			  if (window.innerWidth <= 767) { return 1; }
			  if (window.innerWidth <= 991) { return 2; }
			  return visible;
		  };

		  var goTo = function(i, withTransition){
			  var perView = getVisibleCount();
			  track.style.transition = withTransition ? 'transform 0.4s ease' : 'none';
			  track.style.transform = 'translateX(-' + (i * (100 / perView)) + '%)';
		  };

		  nextBtn.addEventListener('click', function(){
			  if (animating) { return; }
			  animating = true;
			  index++;
			  goTo(index, true);
		  });

		  track.addEventListener('transitionend', function(){
			  animating = false;
			  if (index >= total) {
				  index = 0;
				  goTo(index, false);
			  }
		  });

		  window.addEventListener('resize', function(){
			  goTo(index, false);
		  });
	  });
    },
  }
};



var btnBriefingPreLoader = function( message ){
    if( $btnBriefingModal != null ){
        $btnBriefingModal.remove();
    }
    var html = '<div id="btn_briefing_preloader_wrap" class="btn_briefing_overlay">';
    html += '<div class="btn_briefing_preloader"></div>';
    if( message > '' ){
        html += '<div class="btn_briefing_preloader_msg">'+message+'</div>';
    }
    html += '</div>';
    $doc.body.insertAdjacentHTML('beforeend', html);
    $btnBriefingModal = $doc.querySelector('#btn_briefing_preloader_wrap');
};

var btnBriefingSuccessModal = function( message, onClose ){
    var modalId = 'btn_briefing_success_modal';
    var existing = $doc.getElementById(modalId);
    if( existing ){
        existing.remove();
    }
    var html = '<div class="modal micromodal-slide btn-briefing-success-modal" id="'+modalId+'" aria-hidden="true">'
        + '<div class="modal__overlay" tabindex="-1" data-micromodal-close>'
        +   '<div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="btn-briefing-success-title">'
        +     '<header class="modal__header">'
        +       '<button aria-label="Close modal" class="modal__close" data-micromodal-close></button>'
        +     '</header>'
        +     '<div class="modal__icon">&#10003;</div>'
        +     '<h2 class="modal__title" id="btn-briefing-success-title">Success</h2>'
        +     '<div class="modal__content">'+message+'</div>'
        +     '<footer class="modal__footer">'
        +       '<button class="modal__btn modal__btn-primary" data-micromodal-close>OK</button>'
        +     '</footer>'
        +   '</div>'
        + '</div>'
        + '</div>';
    $doc.body.insertAdjacentHTML('beforeend', html);
    MicroModal.show(modalId, {
        onClose: function(){
            var el = $doc.getElementById(modalId);
            if( el ){
                el.remove();
            }
            if( typeof onClose === 'function' ){
                onClose();
            }
        }
    });
};


var btnBriefingPost = function( postData, callback ){
    postData.nonce = (typeof btn_briefing_data !== 'undefined') ? btn_briefing_data.nonce : '';
    var request = new XMLHttpRequest();
    var encodedData = Object.keys(postData).map(function(key) {
        return key + '=' + encodeURIComponent(postData[key])
    }).join('&');
    // request.open('POST', btn_briefing_data.ajax_url, false);
    request.open('POST', btn_briefing_data.ajax_url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    request.onload = function () {
        // Process the response
        if (request.status >= 200 && request.status < 300) {
            var response = false;
            try {
                response = JSON.parse(request.responseText);
            }
            catch (err) {
                response = false;
            }
            callback(response);
        }
        else{
            console.log({
                func: 'btnBriefingPost',
                status: request.status,
                statusText: request.statusText
            });
        }
    }
    request.send(encodedData);
};

(function($) {
	$(document).ready(function(){
		$(".trigger-button-popup").click(function(){
			var id  = "modal-question";
			MicroModal.show(id);
		});
		$('.btn-briefing-assigned-selector-block').prop('disabled', true).trigger('change.select2');
		$(".btn-popup").click(function(){
			var pdf = $(this).attr('data-url'),
				id  = $(this).attr('data-id');
			MicroModal.show(id);
			setTimeout(function(){
				//var html = '<iframe class="btn-iframe" src="'+pdf+'"></iframe>';
				//$(".wrapper-iframe").html(html);
			},500);
		});

        $('.btn-briefing-assigned-search').not('#btn-briefing-hide-modal .btn-briefing-assigned-search').select2({

    	});

		// The hide-video modal is position:fixed, so select2's default
		// body-appended dropdown gets mispositioned/hidden behind the
		// modal overlay. Anchoring it to the modal keeps it in the same
		// stacking context and fixed-position coordinate space.
		$('#btn-briefing-hide-modal .btn-briefing-assigned-search').select2({
			dropdownParent: $('#btn-briefing-hide-modal'),
			width: '100%'
		});
		$('.btn-briefing-assigned-selector-category').select2({
    		placeholder: 'Select a training category'
    	});
        $('.btn-briefing-assigned-type').select2({
    		placeholder: 'Select a Agency / Station'
    	});
		
		$('.btn-briefing-assigned-selector-block').select2({
    		placeholder: 'Select a training category first'
    	});
		
		
		$('.btn-briefing-assigned-selector-category').on('change', function () {
			var selectedCategory = $(this).val();
			// Clear previous options
			var $block = $('.btn-briefing-assigned-selector-block');
			$block.empty().trigger('change'); // for Select2
			if (selectedCategory) {
			    $block.prop('disabled', false); // Enable select
				btnBriefingPost( {
						action       :'btn_get_briefing_assigned_options_action',
						category_id  : selectedCategory,
					}, function(response){
						if (response.success) {
							$block.select2({
								data: response.data,
								placeholder: 'Select a block',
								width: '100%'
							});
							$block.prop('disabled', false).trigger('change');
						}
					});
			}
		});

        $('.btn-assign').on('click', function(e) {
           e.preventDefault();

           // Get training selection
           const category = $('.btn-briefing-assigned-selector-category').find(':selected');
		   const block = $('.btn-briefing-assigned-selector-block').find(':selected');
		   
		   const categoryID = (category > '')? category.val(): 0;
		   const blockID = (block > '')? block.val(): 0;
           // Get assignment target selection
           const assignedSelected = $('.btn-briefing-assigned-type').find(':selected');
           const assignedValue = assignedSelected.val();
           const assignedType = assignedSelected.data('type');

           // Debug log or AJAX call
           console.log({
             training_id: categoryID,
             assigned_to: assignedValue,
             assigned_type: assignedType
           });

           btnBriefingPreLoader('Loading...');
              setTimeout(function(){
                btnBriefingPost( {
                    action       :'btn_briefing_assigned_training_action',
                    category_id: categoryID,
                    block_id: blockID,
                    assigned_to: assignedValue,
                    assigned_type: assignedType
                }, function(response){
                  if(response.success){
                      $btnBriefingModal.remove();
                      btnBriefingSuccessModal('Training assigned successfully.', function(){
                          window.location.reload();
                      });
                  }
                });
              }, 300);
         });

		 $('.btn-delete-entry-form').on('click', function(e) {
           e.preventDefault();
		   var id = $(this).data('id'),
		   	   $this = $(this);
           btnBriefingPreLoader('Loading...');
              setTimeout(function(){
                btnBriefingPost( {
                    action       :'btn_briefing_policy_delete_action',
                    id: id,
                }, function(response){
                  if(response.success){
                      $btnBriefingModal.remove();
                      $this.closest("li").remove();
					  $("input#link").val("");
                  }
                });
              }, 300);
         });
		
		
		$('.btn-delete-entry-gform').on('click', function(e) {
			e.preventDefault();
			var id = $(this).data('id'),
				$this = $(this);
			btnBriefingPreLoader('Loading...');
			setTimeout(function(){
				btnBriefingPost( {
					action       :'btn_briefing_policy_delete_gform_action',
					id: id,
				}, function(response){
					if(response.success){
						$btnBriefingModal.remove();
						$this.closest("li").remove();
						
					}
				});
			}, 300);
		});
		
		
		
		$('.btn-briefing-wrapper-reporting-status').on('change', function () {
			var selectedCategory = $(this).val();
			if(selectedCategory == "timeframe"){
				$(".time-frame").show();
			}
			else{
				$(".time-frame").hide();
			}
		}); 
		
		
		$('.btn-submit-assigned-report').on('click', function(e) {
			e.preventDefault(); // Prevent default form submission
			var start_date = $(".reporting-start-date").val(); // Get the URL input value
			var end_date = $(".reporting-end-date").val();
			var status = $(".btn-briefing-wrapper-reporting-status").val();
				status = (status > '')? status : 'all';
			btnBriefingPreLoader('Loading...');

			setTimeout(function(){
				btnBriefingPost({
					action: 'btn_briefing_assigned_training_report_action',
					start_date: start_date,
					end_date: end_date, 
					status: status,
				}, function(response) {
					 $btnBriefingModal.remove();
					var $container = document.querySelector(".btn-briefing-wrapper-reporting-content");
					var html = response.data.html;
					console.log(response.data);
					//selectorHtml = response.data.selector;
					$container.innerHTML = html;
					$container.scrollIntoView({ behavior: 'smooth' });
					
					var $table = $(".btn-briefing-wrapper-reporting-content table");

					  // initialize once
					  $table.tablesorter().tablesorterPager({
						container: $(".pagers"),
						size: 50,
						output: "{startRow}–{endRow} of {filteredRows} rows",
						pageReset: 1
					  });
									});
								}, 300);
		});
		
		
		$('.btn-submit-assigned-admin').on('click', function(e) {
			e.preventDefault(); // Prevent default form submission
			var training_id  = $('.btn-briefing-assigned-search').find(':selected').val();
			var status = $('select.btn-briefing-wrapper-admin-status').val();
			console.log(training_id);
			console.log(status);
			btnBriefingPreLoader('Loading...');
			setTimeout(function(){
				btnBriefingPost({
					action: 'btn_briefing_assigned_training_admin_action',
					training_id: training_id,
					status: status, 
				}, function(response) {
					 $btnBriefingModal.remove();
					var $container = document.querySelector(".btn-briefing-container");
					var html = response.data.html;
					console.log(response.data);
					//selectorHtml = response.data.selector;
					$container.innerHTML = html;
					$container.scrollIntoView({ behavior: 'smooth' });
					var $table = $(".table-sorting-wrapper table");

					  // initialize once
					  $table.tablesorter().tablesorterPager({
						container: $(".pager"),
						size: 50,
						output: "{startRow}–{endRow} of {filteredRows} rows",
						pageReset: 1
					  });
				});
			}, 300);
		});
		
		$('form.wrapper-form-agency-policy').on('submit', function(e) {
			e.preventDefault(); // Prevent default form submission
			var url = $(this).find('#link').val(); // Get the URL input value
			var $form = $(this); // Reference to the form

			btnBriefingPreLoader('Loading...');

			setTimeout(function(){
				btnBriefingPost({
					action: 'btn_briefing_agency_policy_action',
					url: url
				}, function(response) {
					if (response.success) {
						$btnBriefingModal.remove(); // Assuming $btnBriefingModal is defined elsewhere
						alert(response.data); // Show response message
					} else {
						alert('An error occurred: ' + (response.data || 'Unknown error.'));
					}
				});
			}, 300);
	});
		$(document).on('click', '.btn-view-link-remove', function(e) {
           e.preventDefault();
		   var id = $(this).data('id'),
		   	   $this = $(this);
           btnBriefingPreLoader('Loading...');
              setTimeout(function(){
                btnBriefingPost( {
                    action       :'btn_briefing_assigned_training_delete_action',
                    id: id,
                }, function(response){
                  if(response.success){
                      $btnBriefingModal.remove();
					$this.closest("a.btn-view-link-remove").text("Make it Active").addClass("btn-view-link-active").removeClass("btn-view-link-remove");
					
					  $this.closest(".btn-briefing-hide-item-list-table").find(".btn-view-status").text("Inactive");
					  $this.closest('.btn-view-status').text("Inactive");
					$this.closest(".btn-briefing-hide-item-list").addClass("inactive-wrapper");
					 
                  }
                });
              }, 300);
         });
		
		$(document).on('click', '.btn-view-link-active', function(e) {
           e.preventDefault();
		   var id = $(this).data('id'),
		   	   $this = $(this);
           btnBriefingPreLoader('Loading...');
              setTimeout(function(){
                btnBriefingPost( {
                    action       :'btn_briefing_assigned_training_active_action',
                    id: id,
                }, function(response){
                  if(response.success){
                    $btnBriefingModal.remove();
					$this.closest("a.btn-view-link-active").text("Remove").addClass("btn-view-link-remove").removeClass("btn-view-link-active");
					 $this.closest(".btn-briefing-hide-item-list-table").find(".btn-view-status").text("Active");
					$this.closest(".btn-briefing-hide-item-list").removeClass("inactive-wrapper");
					 
                  }
                });
              }, 300);
         });
		
		$(document).on('click', '.btn-briefing-completed-training-user', function(e) {
			e.preventDefault(); // Prevent default form submission

			var dataAction = $(this).attr("data-action"),
				training_id = $(this).attr("data-training-id"),
				$agency_id = $(this).attr("data-agency-id"), 
				$station_id = $(this).attr("data-station-id"),
				$assigned_type = $(this).attr("data-type"),
				$assigned_to = $(this).attr("data-assigned-to");
			
				
			btnBriefingPreLoader('Loading...');
			MicroModal.show('btn-training-assigned-popup');

			btnBriefingPost({
				action: 'btn_briefing_assigned_training_report_popup_action',
				data_action: dataAction,
				training_id: training_id,
				agency_id: $agency_id,
				station_id: $station_id,
				assigned_type: $assigned_type,
				assigned_to:$assigned_to
			}, function(response) {
				$btnBriefingModal.remove();
				var $container = document.querySelector(".btn-briefing-modal-container");
				var html = response.data.html;
				console.log(response.data);
				$container.innerHTML = html;
			});
		});
	});
	
	// initialize once
	 $(".btn-briefing-wrapper-reporting-content table").tablesorter().tablesorterPager({
		container: $(".pagers"),
		size: 50,
		output: "{startRow}–{endRow} of {filteredRows} rows",
		pageReset: 1
	 });
	 
	// initialize once
	$(".btn-briefing-assign-post-wrapper table").tablesorter().tablesorterPager({
		container: $(".pager"),
		size: 50,
		output: "{startRow}–{endRow} of {filteredRows} rows",
		pageReset: 1
	});
	$(".btn-briefing-assign-post-wrapper table").trigger('pageSet', [0]);
	$(".btn-briefing-wrapper-reporting-content table").trigger('pageSet', [0]);


})(jQuery);

document.addEventListener('click', function(event) {
    if (event.target.matches('.btn-briefing-hide-action-page') || event.target.matches('.btn-briefing-hide-action')) {
        event.preventDefault();
        var $this      = event.target;
        var dataAction = $this.getAttribute("data-action");
        var type       = $this.getAttribute("data-type");
        var value      = $this.getAttribute("data-value");
        var agencyID   = $this.getAttribute("data-agency-id");
        var videoTitle = $this.getAttribute("data-video-title") || '';

        // If UNHIDE – keep existing behavior (no modal)
        if (dataAction === 'unhide') {
            btnBriefingPreLoader('Loading...');
            setTimeout(function() {
                btnBriefingPost({
                    action    : 'btn_briefing_hide_action',
                    value     : value,
                    type      : type,
                    agencyID  : agencyID,
                    dataAction: dataAction
                }, function(response) {
                    if (response.success) {
                        $this.textContent = type === 'term' ? "Hide" : "Hide Video";
                        $this.setAttribute("data-action", "hide");
                        $this.classList.add("btn-hide");
                        $this.classList.remove("btn-unhide");
                        if (typeof $btnBriefingModal !== 'undefined' && $btnBriefingModal) {
                            $btnBriefingModal.remove();
                        }
                    }
                });
            }, 300);
            return;
        }

        // If HIDE – open modal and populate hidden fields
        var modal = document.getElementById('btn-briefing-hide-modal');
        if (!modal) return;

		console.log("SHOW MODAL");

        modal.style.display = 'block';

        document.getElementById('bb_action').value        = dataAction;
        document.getElementById('bb_type').value          = type;
        document.getElementById('bb_value').value         = value;
        document.getElementById('bb_agency_id').value     = agencyID;
        document.getElementById('bb_video_title').value   = videoTitle;

        // Store reference to button so we can update it after success
        modal._triggerButton = $this;
    }
});

// Modal cancel
document.addEventListener('click', function(event) {
    if (event.target.id === 'bb_cancel') {
        var modal = document.getElementById('btn-briefing-hide-modal');
        if (modal) {
            modal.style.display = 'none';
            modal._triggerButton = null;
            document.getElementById('btn-briefing-hide-form').reset();
            if (window.jQuery) {
                jQuery('#bb_person_authorizing').val('').trigger('change');
            }
        }
    }
});

// Dismiss new-training notice
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('btn-briefing-notice-dismiss')) {
        var notice = document.getElementById('btn-briefing-new-training-notice');
        btnBriefingPost({ action: 'btn_briefing_dismiss_training_notice' }, function() {
            if (notice) notice.remove();
        });
    }
});

// Modal submit
document.addEventListener('submit', function(event) {
    if (event.target.id === 'btn-briefing-hide-form') {
        event.preventDefault();

        var modal = document.getElementById('btn-briefing-hide-modal');
        if (!modal) return;

        var acknowledge       = document.getElementById('bb_acknowledge').checked;
        var reason            = document.getElementById('bb_reason').value.trim();
        var personHiding      = document.getElementById('bb_person_hiding').value.trim();
        var authorizerSelect  = document.getElementById('bb_person_authorizing');
        var authorizerUserId  = authorizerSelect.value;
        var personAuthorizing = authorizerUserId ? authorizerSelect.options[authorizerSelect.selectedIndex].text.trim() : '';
        var dataAction        = document.getElementById('bb_action').value;
        var type              = document.getElementById('bb_type').value;
        var value             = document.getElementById('bb_value').value;
        var agencyID          = document.getElementById('bb_agency_id').value;
        var videoTitle        = document.getElementById('bb_video_title').value;

        // Basic validation
        if (!acknowledge || !reason || !personHiding || !authorizerUserId) {
            alert('All fields are required and the acknowledgement must be checked.');
            return;
        }

        var $btn = modal._triggerButton;

        btnBriefingPreLoader('Loading...');
        setTimeout(function() {
            btnBriefingPost({
                action             : 'btn_briefing_hide_action',
                value              : value,
                type               : type,
                agencyID           : agencyID,
                dataAction         : dataAction,
                reason             : reason,
                person_hiding      : personHiding,
                person_authorizing : personAuthorizing,
                authorizer_user_id : authorizerUserId,
                video_title        : videoTitle
            }, function(response) {
                if (response.success) {
                    if ($btn) {
                        $btn.textContent = type === 'term' ? "Unhide" : "Unhide Video";
                        $btn.setAttribute("data-action", "unhide");
                        $btn.classList.add("btn-unhide");
                        $btn.classList.remove("btn-hide");
                    }
                    modal.style.display = 'none';
                    document.getElementById('btn-briefing-hide-form').reset();
                    if (window.jQuery) {
                        jQuery('#bb_person_authorizing').val('').trigger('change');
                    }
                    modal._triggerButton = null;
					$btnBriefingModal.remove();
                } else if (response.data && response.data.message) {
                    alert(response.data.message);
                }
            });
        }, 300);
    }
});


/*
jQuery(function($){
	var $table = $(".btn-briefing-assign-post-wrappers table").first();
	var $input = $("#table-search");

	// Init tablesorter with external global search across ALL columns
	$table.tablesorter({
		widgets: ['filter'],
		widgetOptions: {
			filter_external: '#table-search',
			filter_anyMatch: true,           // search all columns
			filter_columnFilters: false,     // no inputs in headers
			filter_liveSearch: true,
			filter_searchDelay: 0,           // instant
			filter_saveFilters: false         // persist filter value/state
		}
	}).tablesorterPager({
		container: $(".pager"),
		size: 50,
		output: '{startRow}–{endRow} of {filteredRows} rows',
		pageReset: 0                      // don't jump back to page 1
	});

	// Helper: re-apply current search if something cleared it
	function reapplyIfNeeded(){
		var val = $input.val();
		if (!val) return;
		// if table shows unfiltered results while input has text, reapply
		// (tablesorter keeps filters internally; this safeguards external resets)
		$table.trigger('search', [[ val ]]);
	
	}

	// If your input is inside a <form>, prevent form reset from clearing it
	var $form = $input.closest('form');
	if ($form.length) {
		$form.on('reset', function(e){ e.preventDefault(); });
		// also prevent Enter from submitting
		$form.on('submit', function(e){ e.preventDefault(); });
	}

	// Re-apply after common events that other scripts might trigger
	$table.on('updateComplete applyWidgetsEnd pagerComplete filterEnd', function(){
		reapplyIfNeeded();
	});

	// If blur triggers a reset elsewhere, re-apply on blur as a safety net
	$input.on('blur', function(){
		setTimeout(reapplyIfNeeded, 0);
	});

	// IMPORTANT: remove any manual keystroke handler you previously added:
	// $('#table-search').off('input'); // we rely on filter_external + the safety nets above
});*/

//Closest Polyfill
window.Element && !Element.prototype.closest && (Element.prototype.closest = function(e) {
  var t, o = (this.document || this.ownerDocument).querySelectorAll(e),
    n = this;
  do {
    for (t = o.length; --t >= 0 && o.item(t) !== n;);
  } while (t < 0 && (n = n.parentElement));
  return n
});



!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).MicroModal=t()}(this,function(){"use strict";return(()=>{const e=["a[href]","area[href]",'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',"select:not([disabled]):not([aria-hidden])","textarea:not([disabled]):not([aria-hidden])","button:not([disabled]):not([aria-hidden])","iframe","object","embed","[contenteditable]",'[tabindex]:not([tabindex^="-"])'];class t{constructor({targetModal:e,triggers:t=[],onShow:o=(()=>{}),onClose:i=(()=>{}),openTrigger:n="data-micromodal-trigger",closeTrigger:s="data-micromodal-close",disableScroll:a=!1,disableFocus:l=!1,awaitCloseAnimation:d=!1,awaitOpenAnimation:r=!1,debugMode:c=!1}){this.modal=document.getElementById(e),this.config={debugMode:c,disableScroll:a,openTrigger:n,closeTrigger:s,onShow:o,onClose:i,awaitCloseAnimation:d,awaitOpenAnimation:r,disableFocus:l},t.length>0&&this.registerTriggers(...t),this.onClick=this.onClick.bind(this),this.onKeydown=this.onKeydown.bind(this)}registerTriggers(...e){e.filter(Boolean).forEach(e=>{e.addEventListener("click",e=>this.showModal(e))})}showModal(){if(this.activeElement=document.activeElement,this.modal.setAttribute("aria-hidden","false"),this.modal.classList.add("is-open"),this.scrollBehaviour("disable"),this.addEventListeners(),this.config.awaitOpenAnimation){const e=()=>{this.modal.removeEventListener("animationend",e,!1),this.setFocusToFirstNode()};this.modal.addEventListener("animationend",e,!1)}else this.setFocusToFirstNode();this.config.onShow(this.modal,this.activeElement)}closeModal(){const e=this.modal;this.modal.setAttribute("aria-hidden","true"),this.removeEventListeners(),this.scrollBehaviour("enable"),this.activeElement&&this.activeElement.focus(),this.config.onClose(this.modal),this.config.awaitCloseAnimation?this.modal.addEventListener("animationend",function t(){e.classList.remove("is-open"),e.removeEventListener("animationend",t,!1)},!1):e.classList.remove("is-open")}closeModalById(e){this.modal=document.getElementById(e),this.modal&&this.closeModal()}scrollBehaviour(e){if(!this.config.disableScroll)return;const t=document.querySelector("body");switch(e){case"enable":Object.assign(t.style,{overflow:"",height:""});break;case"disable":Object.assign(t.style,{overflow:"hidden",height:"100vh"})}}addEventListeners(){this.modal.addEventListener("touchstart",this.onClick),this.modal.addEventListener("click",this.onClick),document.addEventListener("keydown",this.onKeydown)}removeEventListeners(){this.modal.removeEventListener("touchstart",this.onClick),this.modal.removeEventListener("click",this.onClick),document.removeEventListener("keydown",this.onKeydown)}onClick(e){e.target.hasAttribute(this.config.closeTrigger)&&(this.closeModal(),e.preventDefault())}onKeydown(e){27===e.keyCode&&this.closeModal(e),9===e.keyCode&&this.maintainFocus(e)}getFocusableNodes(){const t=this.modal.querySelectorAll(e);return Array(...t)}setFocusToFirstNode(){if(this.config.disableFocus)return;const e=this.getFocusableNodes();e.length&&e[0].focus()}maintainFocus(e){const t=this.getFocusableNodes();if(this.modal.contains(document.activeElement)){const o=t.indexOf(document.activeElement);e.shiftKey&&0===o&&(t[t.length-1].focus(),e.preventDefault()),e.shiftKey||o!==t.length-1||(t[0].focus(),e.preventDefault())}else t[0].focus()}}let o=null;const i=e=>{if(!document.getElementById(e))return console.warn(`MicroModal: ❗Seems like you have missed %c'${e}'`,"background-color: #f8f9fa;color: #50596c;font-weight: bold;","ID somewhere in your code. Refer example below to resolve it."),console.warn("%cExample:","background-color: #f8f9fa;color: #50596c;font-weight: bold;",`<div class="modal" id="${e}"></div>`),!1},n=(e,t)=>{if((e=>{if(e.length<=0)console.warn("MicroModal: ❗Please specify at least one %c'micromodal-trigger'","background-color: #f8f9fa;color: #50596c;font-weight: bold;","data attribute."),console.warn("%cExample:","background-color: #f8f9fa;color: #50596c;font-weight: bold;",'<a href="#" data-micromodal-trigger="my-modal"></a>')})(e),!t)return!0;for(var o in t)i(o);return!0};return{init:e=>{const i=Object.assign({},{openTrigger:"data-micromodal-trigger"},e),s=[...document.querySelectorAll(`[${i.openTrigger}]`)],a=((e,t)=>{const o=[];return e.forEach(e=>{const i=e.attributes[t].value;void 0===o[i]&&(o[i]=[]),o[i].push(e)}),o})(s,i.openTrigger);if(!0!==i.debugMode||!1!==n(s,a))for(var l in a){let e=a[l];i.targetModal=l,i.triggers=[...e],o=new t(i)}},show:(e,n)=>{const s=n||{};s.targetModal=e,!0===s.debugMode&&!1===i(e)||(o=new t(s)).showModal()},close:e=>{e?o.closeModalById(e):o.closeModal()}}})()});

