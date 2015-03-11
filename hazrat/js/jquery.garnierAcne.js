(function( $ ) {

	var chosenIdx1, chosenIdx2, settings, lastTabShown, cacheAnswers = [];

	var products = {
	  
	    "PURE_ACTIVE_FRUIT": {
	      "name": "Pure Active Fruit Energy Energizing Facial Foam",
	      "image": "fym/PA Fruit Energy.png",
	      "url": "PA-FruitEnergyEnergizingFacialFoam.php"
	    },
	  
	    "DUO_CLEAN_WHITENING": {
	      "name": "Duo Clean Whitening and Oil Control Foam",
	      "image": "fym/Duo Clean Whitening and Oil Control Foam.png",
	      "url": "DC-WhiteningandOilControlFoam.php"
	    },

	    "PURE_ACTIVE_3": {
	      "name": "Pure Active 3 in 1 Wash, Scrub & Mask",
	      "image": "fym/PA  3 in 1 Wash Scrub Mask.png",
	      "url": "PA-active3in1.php"
	    },

	    "PURE_ACTIVE_6": {
	      "name": "Pure Active 6 in 1 Multi-Action Foam",
	      "image": "fym/PA 6 in 1 Foam.png",
	      "url": "PA-active6in1.php"
	    },

	    "PURE_ACTIVE_SCRUB": {
	      "name": "Pure Active 6 in 1 Multi-Action Scrub",
	      "image": "fym/PA 6 in 1 Foam.png",
	      "url": "PA-AcnoFightScrub.php"
	    },

	};

	var questionnaire = [
	  {
	    "question": "What is your skin concern?",
	    "answers": [
	      {
	        "label": "I want to prevent acne",
	        "next": "2"
	      },
	      {
	        "label": "I have mild acne, which comes and goes once in a while",
	        "next": "1"
	      },
	      {
	        "label": "I have serious acne, and I want to get rid of it",
	        "next": "1"
	      }
	    ]
	  },
	  {
	    "question": "What is your Skin type?", //q1
	    "answers": [
	      {
	        "label": "Oily",
	        "next": "PURE_ACTIVE_FRUIT"
	      },
	      {
	        "label": "Dry",
	        "next": "PURE_ACTIVE_FRUIT" //SCRUB
	      },
	      {
	        "label": "Normal",
	        "next": "PURE_ACTIVE_FRUIT, PURE_ACTIVE_3"
	      },
	      {
	        "label": "Combination",
	        "next": "PURE_ACTIVE_FRUIT, PURE_ACTIVE_3"
	      }
	    ]
	  },
	  {
	    "question": "Is a skin whitening product important for you?",
	    "answers": [
	      {
	        "label": "Yes",
	        "next": "DUO_CLEAN_WHITENING"
	      },
	      {
	        "label": "No",
	        "next": "3"
	      }
	    ]
	  },
	  {
	    "question": "Are you looking for a deep cleaning solution?",
	    "answers": [
	      {
	        "label": "Yes",
	        "next": "PURE_ACTIVE_FRUIT, PURE_ACTIVE_3"
	      },
	      {
	        "label": "No",
	        "next": "PURE_ACTIVE_FRUIT, PURE_ACTIVE_3"
	      }
	    ]
	  }
	];

	var questionnaire22 = {
	  "questions": [
	    "What is your skin concern?",
	    "What Is Your Skin Type?",
	    "Is a skin whitening product important for you?", 
	    "Are you looking for a deep cleaning solution?",
		"We recommend..."
	  ],
	  "tab1": [
	    {
	      "optionItem": "I want healthy, radiant skin",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Dry",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Combination",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Oily",
	          "recommendedItem": {
	            "id": "LC_MULTIACTION",
	            "name": "Light Complete Multi-action whitening cream, SW Instant",
	            "image": "LC_MULTIACTION.jpg",
	            "url": "http://www.amazon.co.uk/GARNIER-COMPLETE-MULTI-ACTION-WHITENING-RESTORE/dp/B00CC6FGO0"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I want to moisturise and protect my skin against harsh environments",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW, LC moisturizer (LC sensitive only)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW, LC moisturizer",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Combination",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW, LC moisturizer",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I have dull skin",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Dry",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Whitening + Oil Control] (Blue)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Combination",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Whitening + Oil Control] (Blue)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Oily",
	          "recommendedItem": {
	            "id": "LC_MULTIACTION",
	            "name": "Duo Clean [Whitening + Oil Control] (Blue), Light Complete Multi-action whitening cream",
	            "image": "LC_MULTIACTION.jpg",
	            "url": "http://www.amazon.co.uk/GARNIER-COMPLETE-MULTI-ACTION-WHITENING-RESTORE/dp/B00CC6FGO0"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I have uneven skin tone",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW range, LC moisturizer (LC sensitive only)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Combination",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I want to get rid of dark spots",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Combination",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I want to minimise my pores",
	      "nextTab": [
	        {
	          "optionItem": "Oily",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Double White] (Black)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Double White] (Black)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        },
	        {
	          "optionItem": "Combination",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Double White] (Black)",
	            "image": "sakura-white-range.jpg",
	            "url": "https://shashasekharan.wordpress.com/tag/garnier-sakura-white/"
	          }
	        }
	      ]
	    }
	  ]
	};
  
	var populateTabHeaders = function(){
		//var tab1 = $('#tab1Header');
		//var tab2 = $('#tab2Header');
		//var tab3 = $('#tab3Header');
		var questions = questionnaire['questions'];

		for(var i=1; i<=questions.length; i++){
			$('#'+settings.rootContainerName+' #tab'+i+'Header').html( questions[i-1] );
		}
	}

	var populateQuestions = function(tabNumber){
		console.log('enters populateQuestions');
		//var ul = $('#'+settings.rootContainerName+' #tab'+tabNumber.toString()+' > ul');
		var ul = $('#'+settings.rootContainerName+' #tab'+tabNumber.toString()+' .tanyelah');
		var questionIdx = (settings.chosenOptionIdx > 0)? settings.chosenOptionIdx : 0;
		var q = questionnaire[questionIdx];
		var questionPlaceholder = $('#'+settings.rootContainerName+' #tab'+tabNumber+' .tanye');
		//var questionPlaceholder = $('#'+settings.rootContainerName+' #tab'+tabNumber+' > #question');
		
		ul.html(''); //clear older list

		questionPlaceholder.html( q.question );

		for(var i=0; i<q.answers.length; i++){
			//var value = (q.answers[i].next != undefined)? 
			//				q.answers[i].next : JSON.stringify(q.answers[i].recommendedItem);
			ul.append(
				'<div class="radio">'+
				  '<label>'+
				    '<input type="radio" name="'+settings.rootContainerName+'_optionsOnTab'+tabNumber+
				    '" class="radioAnswers" value="'+ q.answers[i].next +
				    '" data-label="'+q.answers[i].label+'" />'
				    	+q.answers[i].label+
				  '</label>'+
				'</div>');
			/*ul.append(
				'<li class="list-group-item"> <input type="radio" class="radioAnswers" name="'+
				settings.rootContainerName+'_optionsOnTab'+tabNumber+'" value="'+ q.answers[i].next +'" data-label="'+
				q.answers[i].label+'" />' +
				q.answers[i].label+ '</li>');*/
		}

		$('#'+settings.rootContainerName+' .radioAnswers').click(function(){
			var ans = q.question + ' ' + $(this).attr('data-label');
			var curIdx = $('#'+settings.rootContainerName).bootstrapWizard('currentIndex');
			cacheAnswers[curIdx] = ans;
		});
		
	}

	var initWizard = function( ){
		$('#'+settings.rootContainerName).bootstrapWizard({
				onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#'+settings.rootContainerName+' .progress-bar').css({width:$percent+'%'});

					// If it's the last tab then hide the last button and show the finish instead
					if($current >= $total) {
						$('#'+settings.rootContainerName).find('.pager .next').hide();
						$('#'+settings.rootContainerName).find('.pager .previous').hide();
						$('#'+settings.rootContainerName).find('.pager .finish').show();
						$('#'+settings.rootContainerName).find('.pager .finish').removeClass('disabled');
						$('#'+settings.rootContainerName).find('.progress').hide();
					} else {
						//$('#'+settings.rootContainerName).find('.pager .next').show();
						$('#'+settings.rootContainerName).find('.pager .finish').hide();
						$('#'+settings.rootContainerName).find('.progress').show();
					}

				},
				onTabClick: function(tab, navigation, index) {
					return false;
				},
				onNext: function(tab, navigation, index) {
					//var chosenOptionTab1 = $('input:radio[name='+settings.rootContainerName+'_optionsOnTab1]').filter(":checked").val();
					//var chosenOptionTab2 = $('input:radio[name='+settings.rootContainerName+'_optionsOnTab2]').filter(":checked").val();
					
					lastTabShown = index;

					var nextQuestionIdx = $('input:radio[name='+settings.rootContainerName+'_optionsOnTab'+index+']')
											.filter(":checked").val();

					if(nextQuestionIdx != undefined){
						if(nextQuestionIdx.length <= 2){
							$('#'+settings.rootContainerName).garnierAcne({
								action: 'loadNextTabOptions',
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx: nextQuestionIdx,
								currentIdx : index
							});

						}else{
							$('#'+settings.rootContainerName).garnierAcne({
								action: 'loadRecommendedItem', 
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx : nextQuestionIdx
							});
						
						}

					}else{
						return false;
					}
		        },
		        onPrevious: function(tab, navigation, index) {
		        	console.log('accessing onprev');
		        	$('#'+settings.rootContainerName).bootstrapWizard('show', lastTabShown);
		        }
		});

		//clicks Restart button
		$('#'+settings.rootContainerName+' .finish').click(function() {
			
			$('#'+settings.rootContainerName).bootstrapWizard('first');

			$('#'+settings.rootContainerName).find('.pager .next').show();
			$('#'+settings.rootContainerName).find('.pager .previous').show();
			$('#'+settings.rootContainerName).find('.pager .finish').hide();

			cacheAnswers = [];
		});

        //hiding steps/tab headers
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 0);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 1);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 2);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 3);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 4);
	}

	var loadNextTabOptions = function(){
		console.log('still in loadNextTabOptions');
		populateQuestions( settings.currentIdx+1 );
		return;

		/*var ul = $('#'+settings.rootContainerName+' #tab'+(settings.currentIdx+1)+' > ul');
		//var chosenOption = questionnaire['tab1'][chosenOptionIdx];
		var question = questionnaire[chosenOptionIdx];
		//chosenIdx1 = chosenOptionIdx;

		ul.html(''); //clear older list

		for(var i=0; i<questions.length; i++){
			ul.append('<li class="list-group-item"> <input type="radio" name="optionsOnTab2" value="'+ i +'" />   ' +
				questions[i].optionItem+ '</li>');
		}*/
	}

	var sendResult = function(category, productName, aryOptionsSelected, image, email){

		if(email == '') return;

		$.ajax({
		  type: "POST",
		  url: "http://blackboxdev.co/projects/garnier/save-recommendation.php",
		  data: { 
			user_email: email, 
			product_name: productName,
			category: category,
			options_selected: aryOptionsSelected,
			image: image
		  }
		})
		.done(function( msg ) {
			//alert( "Data Saved: " + msg );
		})
		.fail(function( jqXHR, textStatus ){
			alert( "Request failed: " + jqXHR );
		});
	}

	var prepOptionsSelected = function( answer1, answer2 ){
		var questions = questionnaire['questions'];

		var optionsSelected = [
			questions[0] + " " + answer1,
			questions[1] + " " + answer2
		];

		return optionsSelected.join('|');

	}

	var loadRecommendedItem = function( chosenOptionIdx ){
		console.log('enters loadRecommendedItem');
		//var placeholders = $('#'+settings.rootContainerName+' #tabResult .product-name');
		var imagePlaceholder = $('#'+settings.rootContainerName+' #tabResult #productImage');
		var learnMoreBtn = $('#'+settings.rootContainerName+' #tabResult #learnMoreBtn');

		var theProduct = products[settings.chosenOptionIdx];

		var productName = theProduct.name;
		var productUrl = theProduct.url;
		var imageName = theProduct.image;

		var imageFolder = 'images/';
		var imagePath = imageFolder + imageName;
		var emailFromHiddenDiv = $('#hidEmailPlaceholder').val();

		/*var optionsSelected = prepOptionsSelected(
			chosenOption.optionItem, 
			chosenOption.nextTab[chosenOptionIdx].optionItem
		);*/
		
		/*placeholders.each(function( index ){
			$(this).html( productName );
		});*/

		imagePlaceholder.attr('src', imagePath);

		learnMoreBtn.attr('href', productUrl);	

		//$('#'+settings.rootContainerName).bootstrapWizard('show', 4); //need this to move progressbar
		$('#'+settings.rootContainerName).bootstrapWizard('last'); //need this to move progressbar
		$('#'+settings.rootContainerName+' .tab-pane.active').removeClass('active');
		$('#'+settings.rootContainerName+' #tabResult').addClass('active');

		sendResult('Acne', productName, cacheAnswers.join('|') , imagePath, emailFromHiddenDiv);
	}

    $.fn.garnierAcne = function( options ) {
    	// Establish our default settings
        settings = $.extend({
            action         		: 'init',
            chosenOptionIdx		: null,
            rootContainerName 	: null,
            currentIdx 			: null
        }, options);

        if( settings.action === 'init'){

    		var template = $('#hiddenAcneTemplate').html();
	        this.append(template);
	        //return this;

	        //populateTabHeaders();
	        populateQuestions('1');
	        initWizard();
    	}
    	else if( settings.action === 'loadNextTabOptions'){
    		loadNextTabOptions();
    	}
    	else if( settings.action === 'loadRecommendedItem'){
    		loadRecommendedItem(settings.chosenOptionIdx);
    	}
    }
 
}( jQuery ));