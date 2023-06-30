@php( $request = request());

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
       

        <div class="sidebar-brand">
           
        </div>
        


        <ul class="sidebar-menu">
           

            <li class="nav-item {{$request->is('departments*')?'active':''}}">
                <a class="nav-link" href="{{route('dashboard')}}">
                <i class="fas fa-tachometer-alt" style="font-size:15px;color:#044BA9"></i>
                    <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            <!-- <hr> -->
            <li class="nav-item {{$request->is('doctors*','doctorbulkupload')?'active':''}}">
                <a class="nav-link" href="{{route('manage_user.index')}}">
                <i class="fas fa-users-cog" style="font-size:15px;color:#044BA9"></i>
                    <span>{{__('Manage User')}}</span>
                </a>
            </li>
            <!-- <hr> -->
            <li class="nav-item {{$request->is('doctors*','doctorbulkupload')?'active':''}}">
                <a class="nav-link" href="{{route('book.index')}}">
                <i class="fa-solid fa-file-pdf" style="font-size:15px;color:#044BA9"></i>
                    <span>{{__('Upload Book')}}</span>
                </a>
            </li>



            <li class="nav-item {{$request->is('doctors*','doctorbulkupload')?'active':''}}">
                <a class="nav-link" href="{{route('book.current_reviews')}}">
                <i class="fa-solid fa fa-file" style="font-size:15px;color:#044BA9"></i>
                    <span>{{__('Ongoing Reviews')}}</span>
                </a>
            </li>

            <!-- <hr> -->
         
           
        </ul>

       
    </aside>
</div>