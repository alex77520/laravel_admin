# laravel_admin
Laravel5.5 + AdminLTE  管理后台

AdminLTE: https://github.com/almasaeed2010/AdminLTE

RBAC权限组件：https://github.com/zizaco/entrust


###### 执行命令
```bash
php artisan migrate
```

数据表:
- `admins` &mdash; 管理员表
- `roles` &mdash; 角色表
- `permissions` &mdash; 权限表
- `role_admin` &mdash; 角色与管理员多对多关系表
- `permission_role` &mdash; 角色与权限多对多关系表

