<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
	    <title>表单</title>
		<link rel="stylesheet" type="text/css" href="/video/css/search-onetree_v1.1.css">
		<link type="text/css" rel="stylesheet" href="/video/css/search-onetree-header.css"
        />
	</head>
	<body>
	    <div class="mod-pop" id="widget-search-feedback" style="display: black">
            <a href="javascript:void(0);" class="close" title="关闭" data-feedback-elems="close">
            </a>
            <div class="pop_inner" data-feedback-elems="table" >
                <div class="pop_tit">
                    用户反馈
                </div>
                <div class="feedback">
                    <ul class="problemList clearfix" data-feedback-elems="list" data-cls="selected">
                        <li>
                            <a href="javascript:;" class="selected" data-feedback-elems="item" data-checked="true"
                            data-value="更新不及">
                                更新不及时
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-feedback-elems="item" data-value="播放失败">
                                无法播放
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-feedback-elems="item" data-value="视频旧">
                                视频旧
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-feedback-elems="item" data-value="内容不相关">
                                内容不相关
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-feedback-elems="item" data-value="信息错误">
                                信息错误
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-feedback-elems="item" data-value="其他">
                                其他问题
                            </a>
                        </li>
                    </ul>
                    <h3 class="tle">
                        问题描述 (选填) :
                    </h3>
                    <div class="form_item">
                        <textarea data-feedback-elems="desc" name="" class="textarea-block" placeholder="请具体描述您的问题 (100字以内)">
                        </textarea>
                    </div>
                    <h3 class="tle">
                        联系方式 (选填) :
                        </span>
                    </h3>
                    <div class="form_item">
                        <input type="text" placeholder="请提供您的电话/邮箱, 便于联系并回复您的问题" class="input-block"
                        data-feedback-elems="contact" />
                    </div>
                    <div class="form_item tc mt30">
                        <input type="submit" value="提交" class="btn_normal" data-feedback-elems="commit">
                    </div>
                </div>
            </div>
            <!-- 提交成功 -->
            <div class="pop_inner" data-feedback-elems="success" style="display: black;">
                <div class="succ_info">
                    <div class="succ_txt">
                        <dl>
                            <dt>
                                提交成功！
                            </dt>
                            <dd>
                                感谢您的支持！
                            </dd>
                        </dl>
                    </div>
                    <div class="form_item tc mt30">
                        <a href="javascript:void(0);" title="关闭窗口" class="btn_normal mr20" data-feedback-elems="close">
                            关闭窗口
                        </a>
                        <a href="javascript:void(0);" title="继续反馈" class="btn_normal" data-feedback-elems="goon">
                            继续反馈
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>