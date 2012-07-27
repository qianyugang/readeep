<script type="text/javascript">
$(function() {
	var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
	var len = $("#focus ul li").length; //获取焦点图个数
	var index = 0;
	var picTimer;
	
	//以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span></span>";
	}
	btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0.5);

	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$("#focus .btn span").css("opacity",0.4).mouseenter(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseenter");

	//上一页、下一页按钮透明度处理
	$("#focus .preNext").css("opacity",0.2).hover(function() {
		$(this).stop(true,false).animate({"opacity":"0.5"},300);
	},function() {
		$(this).stop(true,false).animate({"opacity":"0.2"},300);
	});

	//上一页按钮
	$("#focus .pre").click(function() {
		index -= 1;
		if(index == -1) {index = len - 1;}
		showPics(index);
	});

	//下一页按钮
	$("#focus .next").click(function() {
		index += 1;
		if(index == len) {index = 0;}
		showPics(index);
	});

	//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
	$("#focus ul").css("width",sWidth * (len));
	
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if(index == len) {index = 0;}
		},4000); //此4000代表自动播放的间隔，单位：毫秒
	}).trigger("mouseleave");
	
	//显示图片函数，根据接收的index值显示相应的内容
	function showPics(index) { //普通切换
		var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
		$("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
		//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
		$("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //为当前的按钮切换到选中的效果
	}
});
</script>
<div id="main">
<!-- js图片循环开始 -->
		<div id="focus">
			<ul>
				<li><a href="#" target="_blank"><img src="images/01.jpg" alt="QQ商城焦点图效果下载" /></a></li>
				<li><a href="#" target="_blank"><img src="images/02.jpg" alt="QQ商城焦点图效ss果教程" /></a></li>
				<li><a href="#" target="_blank"><img src="images/03.jpg" alt="jquery商城焦点图效果" /></a></li>
				<li><a href="#" target="_blank"><img src="images/04.jpg" alt="jquery商城焦点图代码" /></a></li>
				<li><a href="#" target="_blank"><img src="images/05.jpg" alt="jquery商城焦点图源码" /></a></li>
			</ul>
		</div>
		<div id="right">
				<div class="read"><a href="welcome/read">我要阅读</a></div>
				<div class="wright"><a href="welcome/write">我要书写</a></div>
		</div>
	<!-- js图片循环结束 -->
		<div id="main_content">
			<div class="index_read">
				 <div class="index_title"><a href="welcome/read">一个流传多年的谣言</a></div>
				 <div class="index_content">
				今天，我要郑重的辟一个谣。有一条每过一段时间会被拿出来微博和帖子，每次出现转发都上万，内容与我有关，大致是这样的，十多年前央视做了一期节目叫《对话》，请来三个三好学生，都是女孩子，马楠，刘亦婷和黄思路，而我作为反面教材出现，被观众和嘉宾大肆批判，十年后，这三个女孩子都嫁给了美国人，没有了声音，而我一直留在中国，成为了一个针砭时弊的有良心的知识分子。 </div>
			</div>
			<div class="index_read">
				<div class="index_title"><a href="welcome/read">我所理解的生活</a></div>
				<div class="index_content">
				多天前参加比赛，来了一个久未见面的朋友。他现在的工作是在给明星做经纪。整个周末他就在我们车队的帐篷里。周日分别，他对我说，其实我的自我开发做的并不好，形象管理有问题，如果有职业的经纪人可以打理一下，必然远不是今天的模样。这样，回去给你一个总结的邮件。      刚才他打来了电话，说你问题太多，邮件说不清楚，比如你在比赛那天一直双反你知道么？</div>
			</div>
			<div class="index_read">
				<div class="index_title"><a href="welcome/read">操，你想怎样</a></div>
				<div class="index_content">
				最近看了两部"复仇者联盟"，一部来自美国，一部来自台湾。来自美国的自然不用多说------《复仇者联盟》，捧着爆米花进去看，边看边惊叹，看完再对一圈朋友说，你不得不看。但是我重点要说的是另外一部电影，《赛德克.巴莱》。这是《海角七号》的导演魏德圣的电影，对于大陆的朋友，《赛德克.巴莱》这个名字很难记，我的朋友中就出现了奥德赛巴莱，塞德莱巴克，甚至还涌现了塞巴斯</div>
			 </div>
		</div>
		
		<div id="userfind">
			<div class="find_author"><a href="welcome/ucenter"><img src="images/head_pic.jpg"></a></div>
			<div class="find_title"><a href="welcome/read">一个流传多年的谣言</a></div>
			<div class="find_content">今天，我要郑重的辟一个谣。有一条每过一段时间会被拿出来微博和帖子，每次出现转发都上万，内容与我有关，大致是这样的，十多年前央视做了一期节目叫《对话》，请来三个三好学生，都是女孩子，马楠，刘亦婷和黄思路，而我作为反面教材出现，被大肆批判，和嘉宾大肆批判，十年后，这三个女孩子都嫁给了美国人，没有了声音，而我一直留在中国，成为了一个针砭时弊的有良心的知识分子。  
			</div>
		</div>
		<div id="userfind">
			<div class="find_author"><a href="welcome/ucenter"><img src="images/head_pic.jpg"></a></div>
			<div class="find_title"><a href="welcome/read">一个流传多年的谣言</a></div>
			<div class="find_content">今天，我要郑重的辟一个谣。有一条每过一段时间会被拿出来微博和帖子，每次出现转发都上万，内容与我有关，大致是这样的，十多年前央视做了一期节目叫《对话》，请来三个三好学生，都是女孩子，马楠，刘亦婷和黄思路，而我作为反面教材出现，被大肆批判，和嘉宾大肆批判，十年后，这三个女孩子都嫁给了美国人，没有了声音，而我一直留在中国，成为了一个针砭时弊的有良心的知识分子。  
			</div>
		</div>
		<div id="userfind">
			<div class="find_author"><a href="welcome/ucenter"><img src="images/head_pic.jpg"></a></div>
			<div class="find_title"><a href="welcome/read">一个流传多年的谣言</a></div>
			<div class="find_content">今天，我要郑重的辟一个谣。有一条每过一段时间会被拿出来微博和帖子，每次出现转发都上万，内容与我有关，大致是这样的，十多年前央视做了一期节目叫《对话》，请来三个三好学生，都是女孩子，马楠，刘亦婷和黄思路，而我作为反面教材出现，被大肆批判，和嘉宾大肆批判，十年后，这三个女孩子都嫁给了美国人，没有了声音，而我一直留在中国，成为了一个针砭时弊的有良心的知识分子。  
			</div>
		</div>
		<div id="userfind">
			<div class="find_author"><a href="welcome/ucenter"><img src="images/head_pic.jpg"></a></div>
			<div class="find_title"><a href="welcome/read">一个流传多年的谣言</a></div>
			<div class="find_content">今天，我要郑重的辟一个谣。有一条每过一段时间会被拿出来微博和帖子，每次出现转发都上万，内容与我有关，大致是这样的，十多年前央视做了一期节目叫《对话》，请来三个三好学生，都是女孩子，马楠，刘亦婷和黄思路，而我作为反面教材出现，被大肆批判，和嘉宾大肆批判，十年后，这三个女孩子都嫁给了美国人，没有了声音，而我一直留在中国，成为了一个针砭时弊的有良心的知识分子。  
			</div>
		</div>
		<div id="userfind">
			<div class="find_author"><a href="welcome/ucenter"><img src="images/head_pic.jpg"></a></div>
			<div class="find_title"><a href="welcome/read">一个流传多年的谣言</a></div>
			<div class="find_content">今天，我要郑重的辟一个谣。有一条每过一段时间会被拿出来微博和帖子，每次出现转发都上万，内容与我有关，大致是这样的，十多年前央视做了一期节目叫《对话》，请来三个三好学生，都是女孩子，马楠，刘亦婷和黄思路，而我作为反面教材出现，被大肆批判，和嘉宾大肆批判，十年后，这三个女孩子都嫁给了美国人，没有了声音，而我一直留在中国，成为了一个针砭时弊的有良心的知识分子。  
			</div>
		</div>
</div>