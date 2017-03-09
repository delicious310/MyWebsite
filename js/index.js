/**
 * Created by Administrator on 2017/2/6.
 */
require(['jquery','search','gotop'],function($,search){
    $(function(){
       $('.blog-cate a').on('click',function(){
           $(this).parent().siblings().children('a').removeClass('active');
           $(this).addClass('active');
           //$.get(url,data,function,type);get函数的参数
           var cateId = $(this).data('id');//此语法是专门取data-开头的；$(this).attr('data-id');
           var $blogList = $('.blog-list');
           $.get('welcome/get_blogs',{cateId: cateId},function(data){
               $blogList.empty();
               var html = '';
                for(var i=0; i<data.length; i++){
                   var blog = data[i];
                    html += `
                    <li class="blog">
                        <a href="welcome/view_blog?blogId=`+blog.blog_id+`">
                            <img src="`+blog.img+`" alt="">
                            <div class="blog-desc">
                                <p class="blog-title">`+blog.title+`</p>
                                <span class="blog-click">`+blog.clicked+`</span>
                            </div>
                            <div class="mask">
                                <h4 class="mask-title">PHOTO</h4>
                                <span class="mask-btn">VIEW PHOTO</span>
                            </div>
                        </a>
                    </li>
                    `;
               }
               $blogList.append(html);
           },'json');
       })
    });
});