<router-link tag="h3" :to="{name: 'Analytics'}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" fill="var(--sidebar-icon)" width="20" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M2.22 10.004H1.11A1.11 1.11 0 0 0 0 11.114v2.219c0 .612.497 1.11 1.11 1.11h1.11a1.11 1.11 0 0 0 1.109-1.11v-2.22a1.11 1.11 0 0 0-1.11-1.11zm5.547-3.33h-1.11a1.11 1.11 0 0 0-1.11 1.11v5.549c0 .612.498 1.11 1.11 1.11h1.11a1.11 1.11 0 0 0 1.11-1.11V7.785a1.11 1.11 0 0 0-1.11-1.11zm5.548-3.328h-1.11a1.11 1.11 0 0 0-1.11 1.11v8.877c0 .612.498 1.11 1.11 1.11h1.11a1.11 1.11 0 0 0 1.11-1.11V4.456a1.11 1.11 0 0 0-1.11-1.11zM18.863.018h-1.11a1.11 1.11 0 0 0-1.109 1.11v12.205c0 .612.497 1.11 1.11 1.11h1.109a1.11 1.11 0 0 0 1.11-1.11V1.128a1.11 1.11 0 0 0-1.11-1.11z"/></svg>
    <span class="sidebar-label">
        Analytics
    </span>
</router-link>

@if(count($pages))
<ul class="list-reset mb-8">
    @foreach($pages as $name => $page)
        @if(count($page))
            <li class="leading-wide mb-4 text-sm">
                <router-link :to="{ name: 'Analytics::Page', params: { page: '{{ $name }}' } }" class="text-white ml-8 no-underline dim">
                    {{ ucfirst($name) }}
                </router-link>
            </li>
        @endif
    @endforeach
</ul>
@endif
