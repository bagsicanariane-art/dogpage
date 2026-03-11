@include('user-dashboard.userheader')

<body>
    @include('user-dashboard.sidebar')
    <div class="main-content">
        
        <div class="page-header">
            <h2><i class="bi bi-heart-fill"></i> My Adoptions</h2>
            <p class="text-light opacity-75">Here are all the dogs you have adopted so far. You can also track their progress and details.</p>
        </div>

        <!-- Dog Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card-glass dog-card">
                    <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8ZG9nfHx8fHx8MTY4NzkyODI1OA&ixlib=rb-4.0.3&q=80&w=400" alt="Buddy">
                    <h5 class="mt-3">Buddy</h5>
                    <p>Labrador - Adopted: 2026-03-10</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-glass dog-card">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" alt="Charlie">
                    <h5 class="mt-3">Charlie</h5>
                    <p>Beagle - Adopted: 2026-03-11</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-glass dog-card">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" alt="Charlie">
                    <h5 class="mt-3">Charlie</h5>
                    <p>Beagle - Adopted: 2026-03-11</p>
                </div>
            </div>
        </div>

        <!-- Recent Adoptions Table -->
        <div class="card-glass p-4">
            <h4 class="mb-3">All Adoptions</h4>
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>Dog Name</th>
                        <th>Breed</th>
                        <th>Status</th>
                        <th>Date Adopted</th>
                    </tr>
                </thead>
                <tbody>
                    
            </table>
        </div>
    </div>

</body>

</html>