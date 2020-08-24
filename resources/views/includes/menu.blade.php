<ul class="list-unstyled menu-categories" id="accordionExample">
   <li class="menu">
      <a href="" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-home">
               <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
               <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            <span>
               الرئيسية
            </span>
         </div>
      </a>
   </li>
   @if($user->type == 0)
   <li class="menu">
      <a href="add" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-user-plus">
               <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
               <circle cx="8.5" cy="7" r="4"></circle>
               <line x1="20" y1="8" x2="20" y2="14"></line>
               <line x1="23" y1="11" x2="17" y2="11"></line>
            </svg>
            <span>
               إضافة مريض
            </span>
         </div>
      </a>
   </li>
   @endif
   <li class="menu">
      <a href="view" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-users">
               <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
               <circle cx="9" cy="7" r="4"></circle>
               <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
               <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span>
               عرض المرضى
            </span>
         </div>
      </a>
   </li>
   @if($user->type == 0)
   <li class="menu">
      <a href="add-date" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-plus-square">
               <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
               <line x1="12" y1="8" x2="12" y2="16"></line>
               <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
            <span>
               إضافة موعد
            </span>
         </div>
      </a>
   </li>
   @endif
   <li class="menu">
      <a href="view-today" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-align-right">
               <line x1="21" y1="10" x2="7" y2="10"></line>
               <line x1="21" y1="6" x2="3" y2="6"></line>
               <line x1="21" y1="14" x2="3" y2="14"></line>
               <line x1="21" y1="18" x2="7" y2="18"></line>
            </svg>
            <span>
               مواعيد اليوم
            </span>
         </div>
      </a>
   </li>
   @if($user->type == 1)
   <li class="menu">
      <a href="add-user" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-users">
               <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
               <circle cx="9" cy="7" r="4"></circle>
               <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
               <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span>
               المستخدمين
            </span>
         </div>
      </a>
   </li>
   @endif
   <li class="menu">
      <a href="/" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-trending-up">
               <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
               <polyline points="17 6 23 6 23 12"></polyline>
            </svg>
            <span>
               التقارير والاحصائيات
            </span>
         </div>
      </a>
   </li>
   <li class="menu">
      <a href="logout" aria-expanded="false" class="dropdown-toggle">
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-log-out">
               <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
               <polyline points="16 17 21 12 16 7"></polyline>
               <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
            <span>
               تسجيل الخروج
            </span>
         </div>
      </a>
   </li>
</ul>