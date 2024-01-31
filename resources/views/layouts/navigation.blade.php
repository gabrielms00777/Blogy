<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <x-navigation-item label='Dashboard' routeName='dashboard' icon='th' />
            <x-navigation-item label='Users' routeName='users.index' icon='users' />
            <x-navigation-item label='Categories' routeName='category.index' icon='list-alt' />
            <x-navigation-item label='Posts' routeName='post.index' icon='newspaper' />
            <x-navigation-item label='Comments' routeName='comment.index' icon='comments' />
            <x-navigation-item label='Contacts' routeName='contact.show' icon='envelope' />
            {{-- <x-navigation-item label='About us' routeName='about' icon='address-card' /> --}}
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
