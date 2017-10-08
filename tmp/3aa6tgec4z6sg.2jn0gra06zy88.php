<form role="form" method="post" action="./change-users">
  
  <?php if (isset( $warning )): ?>
    <h1><?= ($warning) ?></h1>
  <?php endif; ?>

  <table>
    <tr>
      <td>Username</td>
      <td>ID</td>
      <td>Type</td>
      <td>Make Admin</td>
    </tr>
    <?php foreach (($users?:[]) as $user): ?>
      <tr>
        <td><?= ($user->getUsername()) ?></td>
        <td><?= ($user->getId()) ?></td>
        <?php if ($user->getType()  == 0): ?>
          <td>User</td>
          <?php else: ?><td>Admin</td>
        <?php endif; ?>
        <td><input type="checkbox" name="change[<?= ($user->getId()) ?>]" value="<?= ($user->getId()) ?>"></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <input id="admin" name="admin" type="submit" value="Make Admin">
  <input id="delete" name="delete" type="submit" value="Delete">
  <input id="user" name="user" type="submit" value="Make User">
</form>