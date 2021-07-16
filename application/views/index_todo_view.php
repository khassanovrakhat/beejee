<div class="container">
    <nav class='navbar navbar-toggleable navbar-light bg-faded'>
        <a class="btn btn-primary" href="/todo/create">Добавить</a>
    </nav>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <form action="/todo" method="post">
                            <th>имя<button name="order" type="submit" class="btn btn-primary btn-sm" value="name">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"/></svg>
                            </button></th>
                            <th>задача<button name="order" type="submit"class="btn btn-primary btn-sm" value="text">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"/></svg>
                            </button></th>
                            <th>email<button name="order" type="submit"class="btn btn-primary btn-sm" value="email">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"/></svg>
                            </button></th>
                            <th>статус</th>
                            <th>
                                <?php if(checkAuth()) echo 'ред.'; ?>
                            </th>
                        </form>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data[0] as $column => $row) : ?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><?=$row['text']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['status'] ? 'отредактировано администратором' : 'Выполнено'?></td>
                            <td>
                                <?php if(checkAuth()): ?>
                                    <a href='/todo/edit/?id=<?=$row["id"]?>' >edit</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php foreach ($data[1] as $column => $row) : ?>
            <li class="page-item"><a class="page-link" href="<?='/todo/index/?page='.$row?>"><?=$row?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>


