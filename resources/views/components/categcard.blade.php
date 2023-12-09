<div class=" d-inline-flex mx-3 my-5">
    <a class="text-decoration-none" href="{{ route('announcement.filter', $category ) }}">
        <div class="my-2 shadow-sm rounded-5 d-flex justify-content-center align-items-center flex-column category{{$category->id}}">

            <i class="m-4 fa-solid fa-{{$category->name}} fa-2xl"></i>
            <h5 class="fs-lg my-2 card-title">{{__('ui.' . "$category->name")}}</h5>
        </div>
    </a>
</div>