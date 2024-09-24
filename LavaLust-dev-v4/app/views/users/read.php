<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table with DataTables</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container my-5">
        <h2 class="text-center">Users</h2>
        <a class="btn btn-primary mb-4" role="button" href="<?= site_url('LavaLust/user/create'); ?>">Create User</a>

        <table id="userTable" class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['jmm_last_name'] ?></td>
                        <td><?= $u['jmm_first_name'] ?></td>
                        <td><?= $u['jmm_email'] ?></td>
                        <td><?= $u['jmm_gender'] ?></td>
                        <td><?= $u['jmm_address'] ?></td>
                        <td>
                            <a href="<?= site_url('LavaLust/user/update/' . $u['id']); ?>">Update</a>
                            <a href="<?= site_url('LavaLust/user/delete/' . $u['id']); ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables on the table
            $('#userTable').DataTable({
                "paging": true, // Enable pagination
                "searching": true, // Enable search
                "ordering": true, // Enable sorting
                "pageLength": 5 // Number of rows per page
            });
        });
    </script>
</body>

</html>