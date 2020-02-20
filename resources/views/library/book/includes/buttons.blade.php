<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li {!! request()->is('library/book')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.book') }}"><i class="fa fa-book main_nav_li" aria-hidden="true"></i>&nbsp;Book Detail</a>

        <a class="page_nav_li {!! request()->is('library/book/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.book.add') }}"><i class="fa fa-plus main_nav_li" aria-hidden="true"></i>&nbsp;New Book</a>
        <a class="page_nav_li {!! request()->is('library/book/import')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.book.import') }}"><i class="fa fa-upload main_nav_li" aria-hidden="true"></i>&nbsp;Bulk Import</a>

        <a class="page_nav_li {!! request()->is('library/book/category')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.book.category') }}"><i class="fa fa-pie-chart main_nav_li" aria-hidden="true"></i>&nbsp;Book Category</a>
    </div>
</div>
<hr class="hr-4">