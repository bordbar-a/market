@foreach($comments as $comment)
    <div class="block margin-bottom-60">

										<span class="user-avatar"><!-- user-avatar -->
											<img class="pull-left media-object" src="/front/images/avatar2.jpg"
                                                 width="64" height="64" alt="">
										</span>

        <div class="media-body">
            <h4 class="media-heading size-14">
                <span class="pull-left">   {{$comment->name}} ---</span>
                <span class="text-muted"> &nbsp;&nbsp; {{$comment->present()->getCreatedAt()}}</span>
                <span class="size-14 text-muted"><!-- stars -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
            </h4>

            <p>
                {!! $comment->content !!}
            </p>

        </div>

    </div>
@endforeach


<!-- REVIEW FORM -->
<h4 class="page-header margin-bottom-40">نوشتن نظر</h4>
<form method="post" action="{{route('front.comment.product.add' , $product->id)}}" id="form">
    @csrf
    <div class="row margin-bottom-10">


        <div class="col-md-6">
            <!-- title -->
            <input type="text" name="title" id="title" class="form-control"
                   placeholder="عنوان: " maxlength="100">
        </div>
        @guest()
            <div class="col-md-6 margin-bottom-10">
                <!-- Name -->
                <input type="text" name="name" id="name" class="form-control"
                       placeholder="نام: " maxlength="100">
            </div>
        @endguest
    </div>

    <!-- Comment -->
    <div class="margin-bottom-30">
                                    <textarea name="content" id="text" class="form-control" rows="6"
                                              placeholder="متن نظر"
                                              maxlength="1000"></textarea>
    </div>

    <!-- Stars -->
    <div class="product-star-vote clearfix">

            <span>
                <label class="radio pull-left">۱ ستاره</label>
                <input type="radio" class="pull-left" name="product-review-vote" value="1"/>
                <i></i>
            </span>

        <span>
                <label class="radio pull-left">۲ ستاره</label>
                <input type="radio" class="pull-left" name="product-review-vote" value="2"/>
                <i></i>
            </span>

        <span>
                <label class="radio pull-left">۳ ستاره</label>
                <input type="radio" class="pull-left" name="product-review-vote" value="3"/>
                <i></i>
            </span>

        <span>
                <label class="radio pull-left">۴ ستاره</label>
                <input type="radio" class="pull-left" name="product-review-vote" value="4"/>
                <i></i>
            </span>

        <span>
                <label class="radio pull-left">۵ ستاره</label>
                <input type="radio" class="pull-left" name="product-review-vote" value="5"/>
                <i></i>
            </span>

    </div>

    <!-- Send Button -->
    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> ثبت نظر
    </button>

</form>
<!-- /REVIEW FORM -->
