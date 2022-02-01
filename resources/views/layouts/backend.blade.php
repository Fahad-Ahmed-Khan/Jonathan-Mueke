<!DOCTYPE html>
<html>
    <head>
        @include('includes.backend.header-links')   
        @livewireStyles  
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            {{-- @include('sweetalert::alert') --}}
            <!-- ========Navbar-============== -->
            @include('includes.backend.navbar')
            <!--===========end navbar========== -->
            <!-- Main Sidebar Container -->
            @include('includes.backend.sidebar')

            <!-- all content  -->
            @yield('content')
            <!-- INCLUDE FOOTER -->
            @include('includes.backend.footer')
        </div>
        
        @include('includes.backend.script')
        @livewireScripts
        
        <script>
            //hide create user modal form
            window.livewire.on('closeUserCreateModal', ()=>{
                $('#addUser').modal('hide')
            })
            window.livewire.on('closeUserEditModal', ()=>{
                $('#editUser').modal('hide')
            })
            window.livewire.on('closeUserDeleteModal', ()=>{
                $('#delete-user-modal').modal('hide')
            })
            window.livewire.on('closeUserImageUpdateModal', ()=>{
                $('#updateProfileImage').modal('hide')
            })

            //about us modal close
            window.livewire.on('closeAboutUsCreateModal', ()=>{
                $('#addAboutUs').modal('hide')
            })
            window.livewire.on('closeAboutUsEditModal', ()=>{
                $('#editAboutUs').modal('hide')
            })
            window.livewire.on('closeAboutUsDeleteModal', ()=>{
                $('#delete-aboutUs-modal').modal('hide')
            })
             //Social Media us modal close
             window.livewire.on('closeSocialMediaCreateModal', ()=>{
                $('#addSocialMedia').modal('hide')
            })
            window.livewire.on('closeSocialMediaEditModal', ()=>{
                $('#editSocialMedia').modal('hide')
            })
            window.livewire.on('closeSocialMediaDeleteModal', ()=>{
                $('#delete-socialmedia-modal').modal('hide')
            })

            //downloads
            window.livewire.on('closeDownloadsCreateModal', ()=>{
                $('#addDownloads').modal('hide')
            })
            window.livewire.on('closeDownloadsEditModal', ()=>{
                $('#editDownload').modal('hide')
            })
            window.livewire.on('closeDownloadsDeleteModal', ()=>{
                $('#delete-document-modal').modal('hide')
            })

            //sliders setting
            window.livewire.on('closeSliderCreateModal', ()=>{
                $('#addSlider').modal('hide')
            })
            window.livewire.on('closeSliderEditModal', ()=>{
                $('#editSlider').modal('hide')
            })
            window.livewire.on('closeSlidersDeleteModal', ()=>{
                $('#delete-slider-modal').modal('hide')
            })

            // news
            window.livewire.on('closeNewsCreateModal', ()=>{
                $('#addNews').modal('hide')
            })
            window.livewire.on('closeNewsEditModal', ()=>{
                $('#editNews').modal('hide')
            })
            window.livewire.on('closeNewsDeleteModal', ()=>{
                $('#delete-news-modal').modal('hide')
            })

            //donateBackend
            window.livewire.on('closeDonorCreationModal', ()=>{
                $('#addDonor').modal('hide')
            })
            window.livewire.on('hideDeleteDonorModal', ()=>{
                $('#delete-donor-modal').modal('hide')
            })
            window.livewire.on('hideUpdateDonorModal', ()=>{
                $('#editDonor').modal('hide')
            })

            //County & Constituency Modals
            window.livewire.on('hideDeleteModal', ()=>{
                $('#delete-county-modal').modal('hide')
            })

            //Volunteer Module
            window.livewire.on('hideCreateVolunteerModal', ()=>{
                $('#addVolunteer').modal('hide')
            })
            window.livewire.on('hideUpdateVolunteerModal', ()=>{
                $('#editVolunteer').modal('hide')
            })
            window.livewire.on('hideDeleteVolunteerModal', ()=> {
                $('#delete-volunteer-modal').modal('hide')
            })

            //subscription 
            window.livewire.on('hideDeleteSubscriptionModal', ()=>{
                $('#delete-subscriber-modal').modal('hide')
            })

            //request shoutout
            window.livewire.on('hideDeleteShoutOutModal', ()=>{
                $('#delete-request-modal').modal('hide')
            })
            window.livewire.on('hideUpdateShoutOutModal', ()=>{
                $('#editRequest').modal('hide')
            })
        </script>
    </body>
</html>