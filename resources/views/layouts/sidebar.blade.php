<div class="drawer-side border-r-2">
    <label for="my-drawer" class="drawer-overlay"></label>
    <ul class="menu p-4 w-80 min-h-full text-base-content">
        <!-- Brand -->
        <li class="mb-4">
            <h1 class="text-2xl font-bold">Komando</h1>
        </li>

        @can('dashboard_access')
            <!-- Dashboard -->
            <li><a href="{{ route('dashboard') }}" class="active">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a></li>
        @endcan

        @can('read_letter')
            <li class="menu-title">
                <span>Surat</span>
            </li>
            <li>
                <details close>
                    <summary>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Surat
                    </summary>
                    <ul>
                        <li><a href="{{ route('letter') }}">Surat</a></li>
                        <li><a href="">Disposisi</a></li>
                    </ul>
                </details>
            </li>
        @endcan


        <!-- Master Data Group -->
        <li class="menu-title">
            <span>Master Data</span>
        </li>
        <li>
            <details close>
                <summary>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Users
                </summary>
                <ul>
                    <li><a href="">List Users</a></li>
                    <li><a href="">Roles</a></li>
                    <li><a href="">Permissions</a></li>
                </ul>
            </details>
        </li>

        <!-- Settings Group -->
        <li class="menu-title">
            <span>Settings</span>
        </li>
        <li>
            <details close>
                <summary>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                </summary>
                <ul>
                    <li><a href="">General</a></li>
                    <li><a href="">Email</a></li>
                    <li><a href="">Notifications</a></li>
                </ul>
            </details>
        </li>

        <!-- Reports Group -->
        <li class="menu-title">
            <span>Reports</span>
        </li>
        <li>
            <details close>
                <summary>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Reports
                </summary>
                <ul>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Weekly</a></li>
                    <li><a href="">Monthly</a></li>
                </ul>
            </details>
        </li>
    </ul>
</div>
