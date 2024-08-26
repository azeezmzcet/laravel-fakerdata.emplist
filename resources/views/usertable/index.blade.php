<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: lightblue;
            padding: 10px;
            
        }
        .content {
            margin-top: 100px; 
        }
        .footer-down {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: lightblue;

        }
        .table-box {
            max-height: 80vh; 
            overflow-y: auto;
            padding: 10px;
        }
        .range-select { margin-left: 20px;}
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Faker Data</h1>
            <form action="{{ route('UsertableModal.search') }}" method="GET" class="d-flex align-items-center">
                <input type="text" name="search" value="{{ $search }}" placeholder="Search the names" class="form-control me-2">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="{{ route('UsertableModal.index') }}" class="btn btn-secondary ms-2">Refresh</a>
            </form>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="table-box">
                <table class="table table-bordered">
                    <thead>
                        <tr>     
                            <th>ID</th>
                            <th>Address</th>
                            <th>Company</th>
                            <th>Job Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                                            <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->company }}</td>
                            <td>{{ $user->job_title }}</td>
                        </tr>
                        @endforeach
                 </tbody>
                </table>
            </div>
        </div>


    </div>

    <div class="footer-down">
        <div class="container d-flex justify-content-between align-items-center">
                    <div>
                
            
            
              {{ $users->links() }}
            </div>
            <form action="{{ route('UsertableModal.index') }}" method="GET" >
                <label for="per_page" class="me-2">Range:</label>
                  <select name="per_page" id="per_page" class="range-select" onchange="this.form.submit()">
                     
                  
                      
                  <option {{ request('per_page') == 20 ? 'selected' : '' }} value="20">20</option>
                    <option {{ request('per_page') == 50 ? 'selected' : '' }} value="50">50</option>
                    <option {{ request('per_page') == 100 ? 'selected' : '' }} value="100">100</option>
                    <option {{ request('per_page') == 150 ? 'selected' : '' }} value="150">150</option>
                    <option {{ request('per_page') == 250 ? 'selected' : '' }} value="250">250</option>
                    <option {{ request('per_page') == 500 ? 'selected' : '' }} value="500">500</option>
                    <option {{ request('per_page') == 750 ? 'selected' : '' }} value="750">750</option>
                    <option {{ request('per_page') == 1000 ? 'selected' : '' }} value="1000">1000</option>
                </select>
                <input type="hidden" name="search" value="{{ request('search') }}">
            </form>
        </div>
    </div>
</body>
</html>
