"use strict";

_FRAMEWORK = {

	init: function () {

		_FRAMEWORK.preLoader();

		_FRAMEWORK.carouselSlider();

		_FRAMEWORK.searchPage();

		_FRAMEWORK.submitContact();

		_FRAMEWORK.tocList();

		_FRAMEWORK.scrollTo();

		_FRAMEWORK.map();

		_FRAMEWORK.active();

		_FRAMEWORK.ajaxHandle();

		_FRAMEWORK.ratioImage();

		_FRAMEWORK.LoadingImages();

		_FRAMEWORK.removeTranlaste();

		/* _FRAMEWORK.Counter(); */

		_FRAMEWORK.menuMobile();

		_FRAMEWORK.ajaxMore();

		_FRAMEWORK.mobiTool();

		_FRAMEWORK.tabtoggle();

		_FRAMEWORK.chaychu();

		_FRAMEWORK.scrollTool();

		_FRAMEWORK.nextMenuMobile();

		_FRAMEWORK.ratioVideo();

		_FRAMEWORK.booking();

		_FRAMEWORK.viewLoadIndex();

		new WOW().init();

	},
	booking: function () {
		$('body').on('click', '.js--popup', function () {

			$('.res-popup-info-over.opacity').addClass('on');

			$(this).attr('disabled', 'disabled');

			let name = $(this).attr('data-package');

			let id_product = $(this).attr('data-id');

			$('input#product').val(name);

			$('#id_product').val(id_product);

		});
		$('.close-send').click(function () {
			$('.res-popup-info-over.opacity').removeClass('on');
			$('.js--popup').removeAttr('disabled');
		});
		$('body').on('click', '.res-popup-info-form', function (event) {
			event.stopPropagation();
		});
		$('body').on('click', '.res-popup-info-over', function (event) {
			event.preventDefault();
			$(this).removeClass('on');
			$('.js--popup').removeAttr('disabled');
		});
		$('body').on('click', '.js--booking', function () {

			let hoten = $('#hoten').val();
			let email = $('#email').val();
			let dienthoai = $('#dienthoai').val();
			let id_product = $('#id_product').val();
			let flag = true;
			if (hoten == '') {
				$('#hoten').parent().find('p').html('Bạn chưa nhập họ tên');
				return false;
			} else {
				$('#hoten').parent().find('p').html('')
			}
			if (email == '') {
				$('#email').parent().find('p').html('Bạn chưa nhập email')
				return false;
			} else {
				$('#email').parent().find('p').html('')
			}
			if (!isEmail(email)) {
				$('#email').parent().find('p').html('Email không đúng định dạng')
				return false;
			} else {
				$('#email').parent().find('p').html('')
			}
			if (dienthoai == '') {
				$('#dienthoai').parent().find('p').html('Bạn chưa nhập số điện thoại')
				return false;
			} else {
				$('#dienthoai').parent().find('p').html('')
			}
			if (!validatePhone(dienthoai)) {
				$('#dienthoai').parent().find('p').html('Điện thoại không đúng định dạng')
				return false;
			} else {
				$('#dienthoai').parent().find('p').html('')
			}
			if (id_product == '' || id_product == 0) {
				$('#id_product').parent().find('p').html('Sản phẩm không có giá trị')
				return false;
			}
			flag && $.ajax({

				url: 'ajax/booking.php',
				type: 'POST',
				data: {
					name: hoten,
					phone: dienthoai,
					email: email,
					id_product: id_product
				},
				dataType: 'json',
				beforeSend: function () {

					$(this).attr('disabled', 'disabled');

				},
				success: function (res) {
					alert(res.message);
					if (res.status == 200) {

						$('.res-popup-info-over.opacity').removeClass('on');
						$('#hoten').val('');
						$('#email').val('');
						$('#dienthoai').val('');
						$(this).removeAttr('disabled');
					}

				},
				complete: function () {

					$(this).removeAttr('disabled');

				}

			});
		});

	},
	viewLoadIndex: function () {

		$('body').on('click', '.js--load', function () {

			let _this = $(this);

			let item = parseInt(_this.attr('data-item'));

			let page = parseInt(_this.attr('data-page'));

			let idl = parseInt(_this.attr('data-idl'));

			// let idc=parseInt(_this.attr('data-idc'));

			let type = _this.attr('data-type');

			let x = page + 1;

			$.ajax({

				url: 'load.js',

				type: 'GET',

				data: {

					page: x,

					per_page: item,

					idl: idl,

					// idc:idc,

					type: type,

				},

				dataType: 'JSON',

				beforeSend: function () {

					$(`#js--render${idl}`).append(getSketon(PAGE_INDEX, 'res--span--2 res--sm--6 move-loading'));

				},

				success: function (data) {

					$(`#js--render${idl}`).append(data.html);

					$(`#js--render--load${idl}`).html(data.paging);


				},
				complete: function () {
					$('.move-loading').remove();
				}
			});

		});

	},

	tabQuestion: function () {

		$(".js-faq").click(function () {

			var $this = $(this);
			if ($this.parent().hasClass("active")) {
				$this.parent().removeClass("active");
				$this.next().slideUp();
				$this.find("i").removeClass("fa-xmark");
				$this.find("i").addClass("fa-circle-plus");
			} else {
				$(".js-faq").parent().removeClass("active");
				$(".js-faq").parent().parent().removeClass("active");
				$(".js-faq").next().slideUp();
				$(".js-faq").find("i").removeClass("fa-xmark");
				$(".js-faq").find("i").addClass("fa-circle-plus");
				$this.parent().addClass("active");
				$this.next().slideDown();
				$this.find("i").removeClass("fa-circle-plus");
				$this.find("i").addClass("fa-xmark");
			}

		});

	},

	scrollTool: function () {

		$('.wrapper-nav__menu').each(function () {
			let $this = $(this);
			var _this = this;
			let margin = parseInt($this.data('margin'));
			let items = $this.find(".wrapper-nav__menu-item");

			let total = 0;
			items.each(function () {
				var width = parseInt($(this).width());
				total = total + width;
				$(this).css('margin-right', margin + 'px');
			})
			$this.find('.wrapper-nav__menu-item:last-child').css('margin-right', '0px');
			let count = items.length;
			total = total + ((count - 1) * margin);

			if ($this.width() < total) {
				var next = document.createElement("div");
				next.className = "wrapper__nav-prev-menu";
				next.innerHTML = "<span></span>";
				_this.append(next);
				var prev = document.createElement("div");
				prev.className = "wrapper__nav-next-menu";
				prev.innerHTML = "<span></span>"
				_this.prepend(prev);
				$this.find('.wrapper-nav__menu-ofstage').css('margin-right', '20px');
				$this.find('.wrapper-nav__menu-ofstage').css('margin-left', '20px');
				getready();
			}
			$this.find('.wrapper-nav__menu-list').css("width", total + 'px');
			$this.addClass("wrappers__list-menu-box-loaded");
		})

		function getready() {
			$('.wrapper__nav-prev-menu').click(function () {
				var $this = $(this);
				var $stage = $this.parent().find(".wrapper-nav__menu-ofstage");
				var left = $stage.scrollLeft();
				var newp = left - 200;
				$stage.scrollLeft(newp);
			})
			$('.wrapper__nav-next-menu').click(function () {
				var $this = $(this);
				var $stage = $this.parent().find(".wrapper-nav__menu-ofstage");
				var left = $stage.scrollLeft();
				var newp = left + 200;
				$stage.scrollLeft(newp);
			})
		}
	},

	chaychu: function () {

		$('.chaychu > div').textillate({
			in: {
				effect: 'fadeInLeft'
			},
			out: {
				effect: 'fadeInRight'
			},
			loop: true
		});

	},

	ajaxMore: function () {

		$(document).on('click', '.seeMore__load', function () {

			let o = $(this);

			let page = $(this).attr('data-page');

			let perPage = $(this).attr('data-perpage');

			let type = $(this).attr('data-type');

			let target = $(this).attr('data-target');

			let check = $(this).attr('data-check');

			let idl = $(this).attr('data-idlist');

			let idc = $(this).attr('data-idcat');

			let idi = $(this).attr('data-iditem');

			let box = $(this).attr('data-box');

			let hd = $(this).attr('data-heading');

			console.log(page, perPage, type, target, check, idl, idc, idi, box, hd);

			$.ajax({

				url: 'ajax/loadProduct.php',

				method: 'POST',

				data: {

					page: page,

					perPage: perPage,

					type: type,

					target: target,

					check: check,

					idl: idl,

					idc: idc,

					idi: idi,

					box: box,

					hd: hd

				},

				dataType: 'JSON',

				beforeSend: function () {

					$(box).addClass('loading');

				},
				error: function (res) {

					console.log(res);

				},
				success: function (res) {

					console.log(res);

					if (res.status == 200) {

						setTimeout(() => {

							$(box).removeClass('loading');

						}, 500);

						$(target).append(res.html);

						$(box).attr('data-page', parseInt(page) + 1);

						$(box).text(res.button);

						if (res.numb < 1) {

							$(box).remove();

						}

					} else {

						$(box).remove();

					}

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();

				}

			})

		});

	},

	loadProductIndex: function () {

		$('.paging-product-view-outstanding').click(function () {

			let _this = $(this);

			let page = $(this).attr('data-page');

			let perPage = $(this).attr('data-perpage');

			let type = $(this).attr('data-type');

			let target = $(this).attr('data-target');

			let box = $(this).attr('data-box');

			let idl = ($(this).attr('data-idl') != '') ? $(this).attr('data-idl') : 0;

			$.ajax({

				url: 'ajax/loadOutstandingAjax.php',

				type: 'POST',

				data: {

					perPage: perPage,

					page: page,

					type: type,

					idl: idl,

				},

				dataType: 'json',

				beforeSend: function () {

					$(_this).addClass('loading');

				},
				success: function (res) {

					if (res.status == 200) {

						setTimeout(() => {

							$(_this).removeClass('loading');

						}, 500);

						$(target).append(res.html);

						$(_this).attr('data-page', parseInt(page) + 1);

						$(_this).html(res.button);

						$(_this).attr('title', res.title);

						$(_this).attr('aria-label', res.title);

						if (res.numb < 1) {

							$(box).remove();

						}

					} else {

						$(box).remove();

					}

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();
				}

			})

		});

		$('.paging-product-view').click(function () {

			let _this = $(this);

			let page = $(this).attr('data-page');

			let perPage = $(this).attr('data-perpage');

			let type = $(this).attr('data-type');

			let target = $(this).attr('data-target');

			let box = $(this).attr('data-box');

			let idl = ($(this).attr('data-idl') != '') ? $(this).attr('data-idl') : 0;

			$.ajax({

				url: 'ajax/loadProductPaging.php',

				type: 'POST',

				data: {

					perPage: perPage,

					page: page,

					type: type,

					idl: idl,

				},

				dataType: 'json',

				beforeSend: function () {

					$(_this).addClass('loading');

				},
				success: function (res) {

					if (res.status == 200) {

						setTimeout(() => {

							$(_this).removeClass('loading');

						}, 500);

						$(target).append(res.html);

						$(_this).attr('data-page', parseInt(page) + 1);

						$(_this).html(res.button);

						$(_this).attr('title', res.title);

						$(_this).attr('aria-label', res.title);

						if (res.numb < 1) {

							$(box).remove();

						}

					} else {

						$(box).remove();

					}

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();
				}

			})

		});
	},


	removeTranlaste: () => {

		$(window).on('load', function () {

			$('.title.gray').remove();

		});

	},
	cartShoppingDetail: function () {

		$('.js-color').on('click touchstart tap', function () {

			var target = $(this).data('target');
			var value = $(this).data('value');
			$('.js-color').removeClass('activeAttr');
			$(this).addClass('activeAttr');
			$(target).val(value);

		});

	},
	mmenu: function () {

		if (exists("nav#mmenu")) {

			$('nav#mmenu').mmenu({

				extensions: ['effect-slide-menu', 'pageshadow'],

				searchfield: false,

				counters: false,

				offCanvas: {

					position: "left"

				},

			});

		}
	},

	Counter: () => {

		$(window).on('load', () => {

			$.ajax({

				url: 'ajax/ajaxCounter.php',

				method: 'POST',

				dataType: 'json',

				success: (data) => { }
			})
		})

	},
	cursorDefault: function () {
		var cursor = document.querySelector('.cursor');
		var cursorinner = document.querySelector('.cursor2');
		var a = document.querySelectorAll('a');

		document.addEventListener('mousemove', function (e) {
			var x = e.clientX;
			var y = e.clientY;
			cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
		});

		document.addEventListener('mousemove', function (e) {
			var x = e.clientX;
			var y = e.clientY;
			cursorinner.style.left = x + 'px';
			cursorinner.style.top = y + 'px';
		});

		document.addEventListener('mousedown', function () {
			cursor.classList.add('click');
			cursorinner.classList.add('cursorinnerhover')
		});

		document.addEventListener('mouseup', function () {
			cursor.classList.remove('click')
			cursorinner.classList.remove('cursorinnerhover')
		});

		a.forEach(item => {
			item.addEventListener('mouseover', () => {
				cursor.classList.add('hover');
			});
			item.addEventListener('mouseleave', () => {
				cursor.classList.remove('hover');
			});
		})
	},
	LoadingImages: function () {

		const images = document.querySelectorAll(".ratio-img__content");

		const imgOptions = {};
		const imgObserver = new IntersectionObserver((entries, imgObserver) => {

			entries.forEach((entry) => {

				if (!entry.isIntersecting) return;

				const img = entry.target;

				const newUrl = img.getAttribute('data-src');

				img.src = newUrl;

				img.classList.remove('img-scale');

				imgObserver.unobserve(entry.target);

			});

		}, imgOptions);

		images.forEach((img) => {
			imgObserver.observe(img);
		});

	},
	ratioVideo: function () {

		var ratioAll = document.querySelectorAll('.ratio-video');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("video-width");

			let height = ratioAll[index].getAttribute("video-height");

			ratioAll[index].style.setProperty('--data-ratio-video', `calc((${height} / ${width}) * 100%)`);


		}

	},
	ratioImage: function () {

		var ratioAll = document.querySelectorAll('.ratio-img');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("img-width");

			let height = ratioAll[index].getAttribute("img-height");

			ratioAll[index].style.setProperty('--data-ratio', `calc((${height} / ${width}) * 100%)`);


		}

	},
	pagingData: function (page, per_page, url, id_list, id_cat, type, tabs) {
		$.post(
			"ajax_paging/" + url, {
			page: page,
			per_page: per_page,
			id_list: id_list,
			id_cat: id_cat,
			type: type
		},
			function (data, status) {

				if (status == "success") {

					$(tabs).html(data);

					$(tabs + ' .pagination li.active').click(function () {

						var pager = $(this).attr('p');

						_FRAMEWORK.pagingData(pager, per_page, url, id_list, id_cat, type, tabs);

						goToByScroll(tabs);

					});


					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();

				}
			}
		);
	},

	ClickSearch: function () {

		$("#SeachOnClick").click(() => {

		});

	},

	submitFormCheckOut: function () {

		$('#checkout-modal__submit-form').click(function () {

			$("#form-checkout").submit();

		});

	},

	checkoutModal: function () {

		$(".js-checkout__tpl").click(function () {

			var name = $('.wrap-input__checkout-name').val();

			var email = $('.wrap-input__checkout-email').val();

			var phone = $('.wrap-input__checkout-phone').val();

			var city = $('.wrap-input__checkout-city').val();

			var dist = $('.wrap-input__checkout-dist').val();

			var address = $('.wrap-input__checkout-address').val();

			var content = $('.wrap-input__checkout-content').val();

			var payship = $('.wrap-input__checkout-payship:checked').val();

			var payment = $('.wrap-input__checkout-payment:checked').val();

			var total = $('.wrap-input__checkout-payment-total').val();

			if (isBlank(name)) {

				_FRAMEWORK.showError('Tên không được bỏ trống!!!', 'error');

				$('.input wrap-input__checkout-name').focus();

				return false;

			} else if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!', 'error');

				$('.input wrap-input__checkout-phone').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!', 'error');

				$('.input wrap-input__checkout-phone').focus();

				return false;

			} else if (isBlank(city)) {

				_FRAMEWORK.showError('Bạn chưa chọn tỉnh thành!!!', 'error');

				return false

			} else if (isBlank(dist)) {

				_FRAMEWORK.showError('Bạn chưa chọn quận huyện!!!', 'error');

				return false

			} else if (isBlank(address)) {

				_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!', 'error');

				return false

			} else {


				$.post("ajax/modal-checkout.php", {
					name: name,
					phone: phone,
					email: email,
					address: address,
					content: content,
					payship: payship,
					payment: payment,
					total: total
				},
					function (data, status) {
						if (status == "success") {
							$("body").append(data);
							_FRAMEWORK.submitFormCheckOut();
							$(".close-modal").click(function () {
								$("#modal-contact").remove();
							})
						}
					});

			}

		});

		$("body").click(".modal,.modal-container", function (event) {
			var modals = document.getElementById("modal-contact");
			var container = document.getElementById("modal-container");
			if (event.target == modals || event.target == container) {
				$("#modal-contact").remove();
			}
		})
	},
	active: () => {

		let heightContent = $('#view-desc-detail').height();

		if (heightContent > 499) {

			$('.bg-article').removeClass('nobackground');

			$('.box-detail-content-btnview').removeClass('d-none');

		}

		$('#click-viewdesc').click(function () {

			var target = $(this).attr('data-target');

			if (!$(target).hasClass('activeDesc')) {

				$(target).addClass('activeDesc');

				$('.bg-article').addClass('nobackground');

				$(this).html('Thu gọn <i class="fa-sharp fa-solid fa-caret-up"></i>');

			} else {

				$(this).html('Xem thêm <i class="fa-sharp fa-solid fa-caret-down"></i>');

				$('.bg-article').removeClass('nobackground');

				$(target).removeClass('activeDesc');

				goToByScroll(target);

			}
		});

		$(".js-cat").click(function () {

			// $('.js-cat').removeClass('activeM');
			var $this = $(this);
			$this.addClass('activeM');
			var targetid = $this.attr("data-target");
			var idlist = $this.attr("data-list");
			var idcat = $this.attr("data-cat");
			var type = $this.attr("data-type");
			$(".js-cat[data-target='" + targetid + "']").removeClass("activeM");
			$this.addClass("activeM");
			_FRAMEWORK.pagingData(1, PAGE_INDEX, "ajax_paging.php", idlist, idcat, type, targetid);

		});

		$('span[data-catology-prev]').click(function () {

			var scroll = $('.section-product__c2>ul').scrollLeft();

			$('.section-product__c2>ul').animate({ scrollLeft: scroll - 100 }, 100);

		})

		$('span[data-catology-next]').click(function () {

			var scroll = $('.section-product__c2>ul').scrollLeft();

			$('.section-product__c2>ul').animate({ scrollLeft: scroll + 100 }, 100);

		})

	},
	map: function () {
		$(".js-active").click(function () {
			var $this = $(this);
			var targetid = $this.attr("data-target");
			$(".js-active").removeClass("active");

			$this.addClass("active");
			if (!$(targetid).hasClass("active")) {
				$(targetid).addClass("active");
			} else {
				$(targetid).removeClass("active");
			}
		});
		$('body').click(".js-map", function (e) {
			var id = e.target.getAttribute('data-id');
			if (id != "" & id != null & id != undefined) {
				var params = { id: id };
			} else {
				if (e.target.classList.contains('js-map')) {
					params = {};
				}
			}
			if (e.target.classList.contains('js-map')) {
				$.post("ajax/loadMap.php", params,
					function (data, status) {
						if (status == "success") {
							$("body").append(data);
							$(".close-modal").click(function () {
								$("#modal-map").remove();
							})
						}
					})
				$("body").click(".modalmap,.modalmap-container", function (event) {
					var modals = document.getElementById("modal-map");
					var container = document.getElementById("modalmap-container");
					if (event.target == modals || event.target == container) {
						$("#modal-map").remove();
					}
				})
			}
		});
	},
	preLoader: function () {

		$('.popup__close-btn').click(() => {
			$('.home--popup').remove();
		});

		// if(_INDEX==true){
		// 	countNumberWhenScrollPage('.section--counter','.counter')
		// }
		// var x=0;
		// setInterval(function(){
		// 	$('.process').removeClass('is-active');
		// 	$(`.process.step${x}`).addClass('is-active');
		// 	x++;
		// 	if(x==4) x=0;
		// },1000)
		$('.res--js--tab').click(function () {
			let _this = $(this);
			let id = _this.data('id');
			let rel = _this.data('rel');
			_this.parent().find('.res--js--tab').removeClass('active');
			_this.addClass('active');
			if (rel === 'ds') {
				$('.res--tab--ds').fadeOut();
			} else {
				$('.res--tab--picnic').fadeOut();
			}

			$(`#tab${id}`).fadeIn();
		});

		$('#ul--tab__detail li').click(function () {

			let _this = $(this);

			let tab = _this.data('tab');
			$('#ul--tab__detail li').removeClass('active');
			$('#tabs--content__modifier>div').css({ 'display': 'none' });
			if (!_this.hasClass('active')) {
				_this.addClass('active');
				$(`#tabs--content__modifier>div#tabs${tab}`).css({ 'display': 'block' });
			}

		});

		marqueeInit({
			uniqueid: 'scroller',
			style: {
				'width': '100% !important'
			},
			inc: 5, //speed - pixel increment for each iteration of this marquee's movement
			mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
			moveatleast: 1,
			neutral: 150,
			savedirection: true,
			random: true
		});

	},

	magicZoomplus: function () {

		if (exists('.product-detail-slider')) {

			var owl = $(".product-detail-slider").owlCarousel({

				autoplay: true,

				autoplaySpeed: 300,

				loop: true,

				navSpeed: 300,

				items: 4,

				margin: 2,

				nav: true,

				navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']

			});

		}

	},

	ajaxHandle: function () {

		$('body').on('click', '.view__load', function () {

			let _this = $(this);

			let item = parseInt(_this.attr('data-item'));

			let page = parseInt(_this.attr('data-page'));

			let x = page + 1;

			$.ajax({

				url: _URL,

				type: 'GET',

				data: {

					page: x,

					per_page: item

				},

				dataType: 'JSON',

				beforeSend: function () {

					$('#wrap__product').append(getSketon(PAGE_INDEX, 'res--span--2 res--sm--6 move-loading'));

					$(this).addClass('loading');

				},

				success: function (data) {

					$(this).removeClass('loading');

					$('#wrap__product').append(data.html);

					$('#paging').html(data.paging);

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();

					_FRAMEWORK.carouselSlider();


				},
				complete: function () {
					$('.move-loading').remove();
				}
			});

		});


		$('#reload-captcha').click(() => {

			$.ajax({

				url: 'ajax/loadCaptcha.php',

				method: 'GET',

				dataType: 'json',

				success: (data) => {

					$('#captcha-code').text(data.characters);

				}

			})

		});

		$('.call-back__detail').click(() => {

			var phone = $('input[name="txt-phone-detail"]').val();

			if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!', 'error');

				$('input[name="txt-phone-detail"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!', 'error');

				$('input[name="txt-phone-detail"]').focus();

				return false;

			} else {

				$.ajax({

					url: 'ajax/ajaxContactPhone.php',

					type: 'post',

					dataType: 'json',

					data: { phone: phone },

					beforeSend: function () {

						$('.call-back__detail').addClass('loading');

					},
					success: function (data) {

						if (data.status == 200) {

							setTimeout(() => {

								$('.call-back__detail').removeClass('loading');

								_FRAMEWORK.showError(data.message, 'success');

								$('input[name="txt-phone-detail"]').val('');

							}, 3000);



						} else {

							_FRAMEWORK.showError(data.message, 'error');

							$('input[name="txt-phone-detail"]').val('');

						}

					}

				});

			}

		});

		$('#submit-promotion').click(() => {

			var email = $('input[name="email-promotion"]').val();

			if (isBlank(email)) {

				_FRAMEWORK.showError('Email không được bỏ trống!!!', 'error');

				$('input[name="email-promotion"]').focus();

				return false;

			} else if (!isEmail(email)) {

				_FRAMEWORK.showError('Email không đúng định dạng!!!', 'error');

				$('input[name="email-promotion"]').focus();

				return false;

			} else {

				$.ajax({

					url: 'ajax/ajaxUudai.php',

					type: 'post',

					dataType: 'json',

					data: { email: email },

					beforeSend: function () {

						$('#submit-promotion').addClass('loading');

					},
					success: function (data) {

						if (data.status == 200) {

							setTimeout(() => {

								$('#submit-promotion').removeClass('loading');

								_FRAMEWORK.showError(data.message, 'success');

								$('input[name="email-promotion"]').val('');

							}, 3000);

						} else {

							_FRAMEWORK.showError(data.message, 'error');

							$('input[name="email-promotion"]').val('');

						}

					}

				});

			}

		});

		$('#submit_register').click(() => {

			var name = $('input[name="fullname"]').val();

			var email = $('input[name="email"]').val();

			// var address = $('input[name="address"]').val();

			var phone = $('input[name="phone"]').val();

			var content = $('textarea[name="content"]').val();

			// var service = $('select[name="services"]').val();

			// var inputCode = $('input[name="captcha"]').val();

			// var captchaCode = $('#captcha-code').text();

			if (isBlank(name)) {

				_FRAMEWORK.showError('Họ tên không được bỏ trống!!!', 'error');

				$('input[name="fullname"]').focus();

				return false;

			} else if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!', 'error');

				$('input[name="phone"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!', 'error');

				$('input[name="phone"]').focus();

				return false;

				// }
				// else if(service==0){

				// 	_FRAMEWORK.showError('Bạn chưa chọn dịch vụ!!','error');

				// 	$('select[name="services"]').focus();

				// 	return false;

			} else
				if (isBlank(email)) {

					_FRAMEWORK.showError('Email không được bỏ trống!!!', 'error');

					$('input[name="email"]').focus();

					return false;

				} else if (!isEmail(email)) {

					_FRAMEWORK.showError('Email không đúng định dạng !!!', 'error');

					$('input[name="email"]').focus();

					return false;

					// }else if (isBlank(address)) {

					// 	_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!','error');

					// 	$('input[name="address"]').focus();

					// 	return false;

					// }else if (isBlank(inputCode)) {

					// 	_FRAMEWORK.showError('Mã xác nhận không được bỏ trống !!!','error');

					//     $('input[name="captcha"]').focus();

					//     return false;

					// }else if (captchaCode != inputCode) {

					// 	_FRAMEWORK.showError('Mã xác nhận không chính xác !!!','error');

					//     $('input[name="captcha"]').focus();

					//     return false;

				} else {

					$.ajax({

						url: 'ajax/ajaxNewsletter.php',

						type: 'post',

						dataType: 'json',

						data: {
							name: name,
							phone: phone,
							// service:service,
							// address:address,
							email: email,
							content: content
						},

						beforeSend: () => {

							$('#submit_register').addClass('loading');

						},
						success: (data) => {

							setTimeout(function () {

								$('#submit_register').removeClass('loading');

								if (data.status == 200) {

									_FRAMEWORK.showError(data.message, 'success');

									$('input[name="fullname"]').val('');

									$('input[name="phone"]').val('');

									// $('input[name="address"]').val('');

									$('input[name="email"]').val('');

									$('textarea[name="content"]').val('');

									// $('input[name="captcha"]').val('');

									// $('select[name="services"]').prop('selectedIndex',0);

								} else {

									_FRAMEWORK.showError(data.message, 'error');

									$('input[name="fullname"]').val('');

									$('input[name="phone"]').val('');

									// $('input[name="address"]').val('');

									$('input[name="email"]').val('');

									$('textarea[name="content"]').val('');

									// $('input[name="captcha"]').val('');

									// $('select[name="services"]').prop('selectedIndex',0);

								}

							}, 1500);
						}

					})
				}
		});
		$('#submit_email').click(() => {

			// var name = $('input[name="fullname"]').val();

			var email = $('input[name="email-footer"]').val();

			// var address = $('input[name="address"]').val();

			// var phone = $('input[name="phone"]').val();

			// var content = $('textarea[name="content"]').val();

			// var service = $('select[name="services"]').val();

			// var inputCode = $('input[name="captcha"]').val();

			// var captchaCode = $('#captcha-code').text();

			// if (isBlank(name)) {

			// 	_FRAMEWORK.showError('Họ tên không được bỏ trống!!!', 'error');

			// 	$('input[name="fullname"]').focus();

			// 	return false;

			// } else if (isBlank(phone)) {

			// 	_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!', 'error');

			// 	$('input[name="phone"]').focus();

			// 	return false;

			// } else if (!validatePhone(phone)) {

			// 	_FRAMEWORK.showError('Số điện thoại sai định dạng!!!', 'error');

			// 	$('input[name="phone"]').focus();

			// 	return false;

			// }
			// else if(service==0){

			// 	_FRAMEWORK.showError('Bạn chưa chọn dịch vụ!!','error');

			// 	$('select[name="services"]').focus();

			// 	return false;

			// else 
			if (isBlank(email)) {

				_FRAMEWORK.showError('Email không được bỏ trống!!!', 'error');

				$('input[name="email-footer"]').focus();

				return false;

			} else if (!isEmail(email)) {

				_FRAMEWORK.showError('Email không đúng định dạng !!!', 'error');

				$('input[name="email-footer"]').focus();

				return false;

				// }else if (isBlank(address)) {

				// 	_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!','error');

				// 	$('input[name="address"]').focus();

				// 	return false;

				// }else if (isBlank(inputCode)) {

				// 	_FRAMEWORK.showError('Mã xác nhận không được bỏ trống !!!','error');

				//     $('input[name="captcha"]').focus();

				//     return false;

				// }else if (captchaCode != inputCode) {

				// 	_FRAMEWORK.showError('Mã xác nhận không chính xác !!!','error');

				//     $('input[name="captcha"]').focus();

				//     return false;

			} else {

				$.ajax({

					url: 'ajax/ajaxNewsletter.php',

					type: 'post',

					dataType: 'json',

					data: {
						// name: name,
						// phone: phone,
						// service:service,
						// address:address,
						email: email,
						// content: content
					},

					beforeSend: () => {

						$('#submit_email').addClass('loading');

					},
					success: (data) => {

						setTimeout(function () {

							$('#submit_email').removeClass('loading');

							if (data.status == 200) {

								_FRAMEWORK.showError(data.message, 'success');

								// $('input[name="fullname"]').val('');

								// $('input[name="phone"]').val('');

								// $('input[name="address"]').val('');

								$('input[name="email-footer"]').val('');

								// $('textarea[name="content"]').val('');

								// $('input[name="captcha"]').val('');

								// $('select[name="services"]').prop('selectedIndex',0);

							} else {

								_FRAMEWORK.showError(data.message, 'error');

								// $('input[name="fullname"]').val('');

								// $('input[name="phone"]').val('');

								// $('input[name="address"]').val('');

								$('input[name="email-footer"]').val('');

								// $('textarea[name="content"]').val('');

								// $('input[name="captcha"]').val('');

								// $('select[name="services"]').prop('selectedIndex',0);

							}

						}, 1500);
					}

				})
			}
		});

	},

	scrollTo: function () {

		$('body').append('<div id="back-to-top" style=""><a class="top arrow"><i class="fa fa-angle-up"></i> <span></span></a></div>');

		$(window).scroll(() => {

			if ($(window).scrollTop() > 100) {

				$('#back-to-top .top').addClass('animate_top');

			} else {

				$('#back-to-top .top').removeClass('animate_top');

			}

		});

		$(window).scroll(() => {

			if ($(window).scrollTop() > 130) {

				$('.scroll-fixed').addClass('fixed');

			} else {

				$('.scroll-fixed').removeClass('fixed');

			}

		});

		$('#back-to-top .top').click(() => {

			$('html, body').animate({ scrollTop: 0 }, 500);

		});

		$('#slide-menu-right').click(function () {

			var container = $('#slide-menu');

			sideScroll(container, 'right', 25, 100, $(".slide-menu").width());

		});



		$('#slide-menu-left').click(function () {

			var container = $('#slide-menu');

			sideScroll(container, 'left', 25, 100, $(".slide-menu").width());

		});

	},

	blockSite: function () {

		if (nonecopy == 1) {

			function clickIE() {

				if (document.all) { return false; }

			}

			function clickNS(e) {

				if (document.layers || (document.getElementById && !document.all)) {

					if (e.which == 2 || e.which == 3) { return false; }
				}

			}

			if (document.layers) {
				document.captureEvents(Event.MOUSEDOWN);
				document.onmousedown = clickNS;
			} else {
				document.onmouseup = clickNS;
				document.oncontextmenu = clickIE;
				document.onselectstart = clickIE
			}
			document.oncontextmenu = new Function("return false")

			function disableselect(e) {

				return false

			}

			function reEnable() {

				return true

			}

			document.onselectstart = new Function("return false")

			if (window.sidebar) {

				document.onmousedown = disableselect

				document.onclick = reEnable

			}

			$(document).keydown(function (event) {

				if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {

					return false;

				}

				if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {

					return false;

				}

				if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {

					return false;

				}

				// "U" key

				if (event.ctrlKey && event.keyCode == 85) {

					return false;

				}

				if (event.keyCode == 123) {

					return false;

				}

			});

		}

	},

	menuMobile: function () {

		$('#close-menumobile').click(function () {

			$('#menuSide').removeClass('active');

		});

		$('div[data-toggle-menu]').click(function () {

			if (!$(this).hasClass('active')) {

				$(this).addClass('active');

				$('body').append('<div class="bg-mask"></div>');

				$('.box-modal-menu').css({ 'transform': 'translateX(0)', 'left': '0' });

			} else {

				$(this).removeClass('active');

				$('.bg-mask').remove();

				$('.box-modal-menu').css({ 'transform': 'translateX(-260px)', 'left': '-260px' });

			}

		});

		$('body').on('click', '.bg-mask', function () {

			$('.bg-mask').remove();

			$('.navbar-menu').removeClass('active');

			$('.box-modal-menu').css({ 'transform': 'translateX(-260px)', 'left': '-260px' });

		});

		$('span.drop').click(function () {

			if (!$(this).hasClass('active')) {

				$(this).removeClass('active');

				$(this).addClass('active');

				$(this).closest('li').find('>ul').stop().slideUp();

				$(this).closest('li').find('>ul').stop().slideDown();

			} else {

				$(this).removeClass('active');

				$(this).removeClass('active');

				$(this).closest('li').find('>ul').stop().slideUp();

			}

		});

		$('#fabCheckbox').click(function () {

			if (this.checked) {

				$('.mask-overlay').addClass('is-active');

			} else {

				$('.mask-overlay').removeClass('is-active');

			}

		});

	},

	tabtoggle: function () {

		$('.js-droptabdetail').click(function () {

			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-chevron-up');
				$this.find("i").addClass('fa-chevron-down');
			} else {
				$(".js-droptabdetail").parent().removeClass('active');
				$(".js-droptabdetail").next().slideUp();
				$(".js-droptabdetail").find("i").removeClass('fa-chevron-up');
				$(".js-droptabdetail").find("i").addClass('fa-chevron-down');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-chevron-down');
				$this.find("i").addClass('fa-chevron-up');
			}
		});

		$('.js-droptabdetail2').click(function () {

			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-chevron-up');
				$this.find("i").addClass('fa-chevron-down');
			} else {
				$(".js-droptabdetail2").parent().removeClass('active');
				$(".js-droptabdetail2").next().slideUp();
				$(".js-droptabdetail2").find("i").removeClass('fa-chevron-up');
				$(".js-droptabdetail2").find("i").addClass('fa-chevron-down');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-chevron-down');
				$this.find("i").addClass('fa-chevron-up');
			}
		});


	},

	nextMenuMobile: function () {

		$('.wrapper-menu__header-mobile-next-menu').click(function () {

			var scroll = $('.wrapper-menu__header-mobile-list').scrollLeft();

			$('.wrapper-menu__header-mobile-list').animate({ scrollLeft: scroll + 200 }, 200);

		});

		$('.wrapper-nav__menu-next--mobile').click(function () {

			var scroll = $('.nav-services__mobile-list').scrollLeft();

			$('.nav-services__mobile-list').animate({ scrollLeft: scroll + 200 }, 200);

		});

		$('.wrapper-nav__menu-prev--mobile').click(function () {

			var scroll = $('.nav-services__mobile-list').scrollLeft();

			$('.nav-services__mobile-list').animate({ scrollLeft: scroll - 200 }, 200);

		});
	},


	carouselSlider: function () {

		if (exists('#owl--product--month')) {

			$('#owl--product--month').owlCarousel({

				loop: 0,

				margin: 20,

				responsiveClass: true,

				animateOut: 'fadeOut',

				dots: 0,

				nav: 1,

				navText: [
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M0.25 18L17.75 35.5V25L10.75 18L17.75 11V0.5L0.25 18ZM14.25 18L31.75 0.5V11L24.75 18L31.75 25V35.5L14.25 18Z" fill="url(#paint0_linear_33_49)"/>
					<defs>
					<linearGradient id="paint0_linear_33_49" x1="37" y1="5.75" x2="12.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`,
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M31.75 18L14.25 35.5V25L21.25 18L14.25 11V0.5L31.75 18ZM17.75 18L0.25 0.5V11L7.25 18L0.25 25V35.5L17.75 18Z" fill="url(#paint0_linear_33_46)"/>
					<defs>
					<linearGradient id="paint0_linear_33_46" x1="-5" y1="5.75" x2="19.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`
				],

				autoplay: 1,

				autoplayTimeout: 1000,

				smartSpeed: 200,

				autoplayHoverPause: true,

				autoHeight: false,

				responsive: {

					0: {
						nav: 1,
						dot: 1,
						items: 2

					},

					600: {
						nav: 1,
						dot: 1,
						items: 3

					},

					1000: {
						dot: 1,
						items: 5

					},

					1200: {

						items: 5

					}

				}

			});

		}

		if (exists('#owl-cert')) {

			$('#owl-cert').owlCarousel({

				loop: 0,

				margin: 20,

				responsiveClass: true,

				animateOut: 'fadeOut',

				dots: 0,

				nav: 1,

				navText: [
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M0.25 18L17.75 35.5V25L10.75 18L17.75 11V0.5L0.25 18ZM14.25 18L31.75 0.5V11L24.75 18L31.75 25V35.5L14.25 18Z" fill="url(#paint0_linear_33_49)"/>
					<defs>
					<linearGradient id="paint0_linear_33_49" x1="37" y1="5.75" x2="12.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`,
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M31.75 18L14.25 35.5V25L21.25 18L14.25 11V0.5L31.75 18ZM17.75 18L0.25 0.5V11L7.25 18L0.25 25V35.5L17.75 18Z" fill="url(#paint0_linear_33_46)"/>
					<defs>
					<linearGradient id="paint0_linear_33_46" x1="-5" y1="5.75" x2="19.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`
				],

				autoplay: 1,

				autoplayTimeout: 5000,

				smartSpeed: 200,

				autoplayHoverPause: true,

				autoHeight: false,

				responsive: {

					0: {
						nav: 1,
						items: 2

					},

					600: {
						nav: 1,
						items: 2

					},

					1000: {
						items: 4

					},

					1200: {

						items: 4

					}

				}

			});
			$('.res--owl--theme.res--owl--prev').click(function () {

				$('#owl--bycicle').trigger('prev.owl.carousel');

			});

			$('.res--owl--theme.res--owl--next').click(function () {

				$('#owl--bycicle').trigger('next.owl.carousel');

			});
		}

		if (exists('#owl--photos')) {

			$('#owl--photos').owlCarousel({

				loop: 0,

				margin: 20,

				responsiveClass: true,

				animateOut: 'fadeOut',

				dots: 0,

				nav: 1,

				navText: [
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M0.25 18L17.75 35.5V25L10.75 18L17.75 11V0.5L0.25 18ZM14.25 18L31.75 0.5V11L24.75 18L31.75 25V35.5L14.25 18Z" fill="url(#paint0_linear_33_49)"/>
					<defs>
					<linearGradient id="paint0_linear_33_49" x1="37" y1="5.75" x2="12.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`,
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M31.75 18L14.25 35.5V25L21.25 18L14.25 11V0.5L31.75 18ZM17.75 18L0.25 0.5V11L7.25 18L0.25 25V35.5L17.75 18Z" fill="url(#paint0_linear_33_46)"/>
					<defs>
					<linearGradient id="paint0_linear_33_46" x1="-5" y1="5.75" x2="19.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`
				],

				autoplay: 1,

				autoplayTimeout: 5000,

				smartSpeed: 200,

				autoplayHoverPause: true,

				autoHeight: false,

				responsive: {

					0: {
						nav: 1,
						dot: 1,
						items: 2

					},

					600: {
						nav: 1,
						dot: 1,
						items: 3

					},

					1000: {
						dot: 1,
						items: 4

					},

					1200: {

						items: 4

					}

				}

			});
		}

		if (exists('#owl--related')) {

			$('#owl--related').owlCarousel({

				loop: 0,

				margin: 20,

				responsiveClass: true,

				animateOut: 'fadeOut',

				dots: 0,

				nav: 0,

				navText: [
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M0.25 18L17.75 35.5V25L10.75 18L17.75 11V0.5L0.25 18ZM14.25 18L31.75 0.5V11L24.75 18L31.75 25V35.5L14.25 18Z" fill="url(#paint0_linear_33_49)"/>
					<defs>
					<linearGradient id="paint0_linear_33_49" x1="37" y1="5.75" x2="12.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`,
					`<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
					<path d="M31.75 18L14.25 35.5V25L21.25 18L14.25 11V0.5L31.75 18ZM17.75 18L0.25 0.5V11L7.25 18L0.25 25V35.5L17.75 18Z" fill="url(#paint0_linear_33_46)"/>
					<defs>
					<linearGradient id="paint0_linear_33_46" x1="-5" y1="5.75" x2="19.5" y2="30.25" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2492FF"/>
					<stop offset="1" stop-color="#0043AE"/>
					</linearGradient>
					</defs>
					</svg>`
				],

				autoplay: 1,

				autoplayTimeout: 1000,

				smartSpeed: 200,

				autoplayHoverPause: true,

				autoHeight: false,

				responsive: {

					0: {

						items: 2

					},

					600: {

						items: 2

					},

					1000: {

						items: 4

					},

					1200: {

						items: 5

					}

				}

			});
		}
		if (exists('#ow--product--related')) {

			$('#ow--product--related').owlCarousel({

				loop: 0,

				margin: 10,

				responsiveClass: true,

				animateOut: 'fadeOut',

				dots: 0,

				nav: 0,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>", "<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay: 1,

				autoplayTimeout: 1000,

				smartSpeed: 200,

				autoplayHoverPause: true,

				autoHeight: false,

				responsive: {

					0: {

						items: 3

					},

					600: {

						items: 3

					},

					1000: {

						items: 4

					},

					1200: {

						items: 4

					}

				}

			});
		}



		if (exists("#sync1")) {
			var sync1 = $("#sync1 .owl-theme");
			var sync2 = $("#sync2 .owl-theme");
			var slidesPerPage = 4;
			var syncedSecondary = true;
			sync1.owlCarousel({
				items: 1,
				slideSpeed: 2000,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				center: false,
				autoplay: true,
				autoplayHoverPause: true,
				dots: false,
				loop: true,
				lazyLoad: true,
				responsiveRefreshRate: 200

			}).on('changed.owl.carousel', syncPosition);

			sync2
				.on('initialized.owl.carousel', function () {
					sync2.find(".owl-item").eq(0).addClass("synced");
				})
				.owlCarousel({
					items: slidesPerPage,
					dots: false,
					margin: 10,
					nav: false,
					loop: false,
					center: false,
					smartSpeed: 200,
					slideSpeed: 500,
					slideBy: slidesPerPage,
					responsiveRefreshRate: 100,
					responsive: {

						0: {
							items: 2
						},
						600: {
							items: 3
						},
						1000: {
							items: 3
						},
						1200: {

							items: 4

						}

					}
				}).on('changed.owl.carousel', syncPosition2);

			function syncPosition(el) {
				var count = el.item.count - 1;
				var current = Math.round(el.item.index - (el.item.count / 2) - .5);

				if (current < 0 && 1 < 2) {
					current = count;
				}
				if (current > count) {
					current = 0;
				}

				sync2
					.find(".owl-item")
					.removeClass("synced")
					.eq(current)
					.addClass("synced");
				var onscreen = sync2.find('.owl-item.active').length - 1;
				var start = sync2.find('.owl-item.active').first().index();
				var end = sync2.find('.owl-item.active').last().index();

				if (current > end) {
					sync2.data('owl.carousel').to(current, 100, true);
				}
				if (current < start && 1 < 2) {
					sync2.data('owl.carousel').to(current - onscreen, 100, true);
				}
			}

			function syncPosition2(el) {
				if (syncedSecondary) {
					var number = el.item.index;
					sync1.data('owl.carousel').to(number, 100, true);
				}
			}

			sync2.on("click", ".owl-item", function (e) {
				e.preventDefault();
				var number = $(this).index();
				sync1.data('owl.carousel').to(number, 300, true);
			});
		}

	},

	navBar: function () {

		$('ul.box-nav-js li[data-tabs]').click(function () {

			$('ul.box-nav-js li[data-tabs]').removeClass('active');

			$(this).addClass('active');

			var role = $(this).attr('role');

			$('.tabs-content[data-tabs]').removeClass('active');

			$('.tabs-content[data-view-' + role + ']').addClass('active');

		});

	},

	searchPage: function () {

		$('button[data-btn-search-pc]').click(function () {

			var t = $('#keywordspc');

			searchEnter(t);

		});
		$('button[data-btn-search-m]').click(function () {

			var t = $('#keywords-m');

			searchEnter(t);

		});
		$('button.button-search-m').click(function () {

			var t = $('#keywords-m');

			searchEnter(t);

		});

		$('button.button-search-mmenu').click(function () {

			var t = $('#keywords-mmenu');

			searchEnter(t);

		});

		$('i.button-search-m').click(function () {

			var t = $('#keywords-m');

			searchEnter(t);

		});

		$('button.btn--search').click(function () {

			var t = $('#keywords');

			searchEnter(t);

		});


		$('#keywords').keypress(function (e) {

			if (e.which == 13) {

				searchEnter($(this));

			}

		});

		$('#keywords-m').keypress(function (e) {

			if (e.which == 13) {

				searchEnter($(this));

			}

		});

		$('#keywords-mmenu').keypress(function (e) {

			if (e.which == 13) {

				searchEnter($(this));

			}

		});

		$('#keywordspc').keypress(function (e) {

			if (e.which == 13) {

				searchEnter($(this));

			}

		});


		$('input[data-role="search-input"]').placeholderTypewriter({ text: _PLACEHOLDER });

		$('input[data-inputsearch-mobile]').placeholderTypewriter({ text: _PLACEHOLDER });



	},

	showError: function (message, status) {



		$.toast({



			heading: 'Thông báo',



			text: message,



			position: 'top-right',



			stack: false,



			icon: status



		});



	},

	submitContact: function () {

		$('#submit-contact').click(function () {

			var _o = $(this);

			var _fn = $('#customername').val();

			var _el = $('#customerEmail').val();

			var _pn = $('#customerPhone').val();

			var _obj = $('#contactSubject').val();

			var _content = $('#contactMessage').val();

			var _capcha = $('#contactCapcha').val();

			if (isBlank(_fn)) {

				$('#customername').focus();

				return false;

			} else if (isBlank(_el)) {

				$('#customerEmail').focus();

				return false

			} else if (!isEmail(_el)) {

				$('#customerEmail').focus();

				return false;

			} else if (isBlank(_pn)) {

				$('#customerPhone').focus();

				return false;

			} else if (!validatePhone(_pn)) {

				$('#customerPhone').focus();

				return false;

			} else if (isBlank(_capcha)) {

				$('#contactCapcha').focus();

				return false;

			}

			var params = {

				_fn: _fn,

				_el: _el,

				_pn: _pn,

				_obj: _obj,

				_content: _content,

				_capcha: _capcha

			};

			$.ajax({

				url: 'ajax/ajaxContact.php',

				dataType: 'json',

				data: params,

				type: 'post',

				beforeSend: function () {

					_o.addClass('loading');

				},

				error: function (res) {

					_o.removeClass('loading');

					_FRAMEWORK.showError('server error!', 'error');

				},

				success: function (res) {

					setTimeout(function () {

						_o.removeClass('loading');

						if (res.status == 200) {

							_FRAMEWORK.showError(res.message, res.error);

							$('#customername').val('');

							$('#customerEmail').val('');

							$('#customerPhone').val('');

							$('#contactSubject').val('');

							$('#contactMessage').val('');

							$('#contactCapcha').val('');

						} else {

							_FRAMEWORK.showError(res.message, res.error);

						}

					}, 1500);

				}

			})

		});

	},

	mobiTool: function () {

		$(".js-moredetail").click(function () {
			var target = $(this).data('target');
			$(target).toggleClass('active');
			if ($(target).hasClass('active')) {
				$(this).html('THU GỌN');
			} else {
				$(this).html('XEM THÊM');
			}
		})

		$('.js-bank-pop').click(function () {
			var target = $(this).data('target');
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$(target).removeClass('active');
			} else {
				$('.bankpop').removeClass('active');
				$('.js-bank-pop').removeClass('active');
				$(this).addClass('active');
				$(target).addClass('active');
			}
		});

		$('.js-mobi-tool').click(function () {
			var $this = $(this);
			var target = $this.data('target');
			var id = $this.attr('id');
			$('.js-mobi-tool').each(function () {
				if ($(this).attr('id') != id & $(this).find('.mobi-tool-act').hasClass('active')) {
					var t = $(this).data('target');
					$(this).find('.mobi-tool-act').removeClass('active');
					$(t).removeClass('active');
				}
			})
			$this.find('.mobi-tool-act').toggleClass('active');
			$(target).toggleClass('active');
		});
		$(".toggle-btn").click(function (e) {
			e.preventDefault();
			var $next = $(this).parent().next();
			var $grandparent = $(this).parent().parent().parent();
			$grandparent.find("li").removeClass('active');
			$grandparent.find(".ic-arrow").removeClass('active');
			if ($next.hasClass("show")) {
				$next.removeClass("show");
				$next.slideUp(500);
				$(this).parent().parent().addClass('active');
			} else {
				$grandparent.find("li .inner").removeClass("show");
				$grandparent.find("li .inner").slideUp(500);
				$grandparent.find("i").attr("class", "fal fa-chevron-down");
				$next.slideDown(500);
				$(this).parent().parent().addClass('active');
				$(this).addClass('active');
				$next.addClass("show");
			}

		});
		$('.js-droptab').click(function () {
			var $this = $(this);
			$('.js-droptab').removeClass('active');
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.removeClass('active');
				$this.next().slideUp(500);
			} else {
				$(".js-droptab").parent().removeClass('active');
				$(".js-droptab").next().slideUp(500);
				$this.parent().addClass('active');
				$this.addClass('active');
				$this.next().slideDown(500);
			}
		});

		$(".first").trigger('click');

	},

	tocList: function () {

		if (_TOC == 1 || _LIST_TOC == 1) {

			$('#toc').toc({

				selectors: 'h2, h3, h4, h5, h6',

				container: $('.content'),

				status: true

			});

			$('a#toc').click(function () {

				$('.toc-list').toggle(200);

			});

			$('.toc-list').find('a').click(function (e) {

				e.preventDefault();

				var x = $(this).attr('data-rel');

				goToByScroll(x);

			});

		}

	},
	addCart: () => {

		$('body').on('click', '.js-addcart', function (e) {

			e.preventDefault();

			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');

			$.ajax({

				url: 'ajax/addCart.php',

				type: 'POST',

				data: {

					pid: id,

					quality: qty
				},

				dataType: 'json',

				beforeSend: function () {

					$('#loader').addClass('active');

				},

				success: function (res) {

					$('.viewcart').html(res['total-product']);

					$('.viewcartm').html(res['total-product']);

					$('.view-cart').html(res['total-product']);

					$('.view-cartm').html(res['total-product']);

					$('.view-price').html(res['price-string']);

					$('#total-product').html(res['total-product']);

					$('.numb-cart').html(res['total-product']);

					$('#total-price').html(res['total-price']);

					$('.cart-price').html(res['total-price']);

					$('#js-price-temp').html(res['price-string']);

					$('#js-total-cart').html(res['price-string']);

					$('#js-total-cart1').html(res['price-string']);

					$('.body-cart').html(res['html']);

					// _FRAMEWORK.showError(res['total-price'],'success');


				},

				complete: function () {
					$('#loader').removeClass('active');
					_FRAMEWORK.showError('Thêm vào giỏ hàng thành công !', 'success');

				}

			});


		});

		$('body').on('click', '.js-addcart-buynow', function (e) {



			e.preventDefault();

			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');



			$.ajax({

				url: 'ajax/addCart.php',

				type: 'POST',

				data: {
					pid: id,
					quality: qty
				},

				dataType: 'json',

				beforeSend: function () {

					$('#loader').addClass('active');

				},
				error: function (res) {

					// _o.removeClass('loading');

					// _FRAMEWORK.showError('server error!', 'error');

					// alert("OK");

				},
				success: function (res) {


					$('.viewcart').html(res['total-product']);

					$('.view-price').html(res['price-string']);

					$('#total-product').html(res['total-product']);

					$('.numb-cart').html(res['total-product']);

					$('#total-price').html(res['total-price']);

					$('.cart-price').html(res['total-price']);

					$('#js-price-temp').html(res['price-string']);

					$('#js-total-cart').html(res['price-string']);

					$('#js-total-cart1').html(res['price-string']);

					$('.body-cart').html(res['html']);

					console.log(res.url);

					window.location.href = res.url;

					// _FRAMEWORK.showError(res['total-price'],'success');		 


				},

				complete: function () {

					$('#loader').removeClass('active');

				}

			});


		});
	}

}

_FRAMEWORK.init();