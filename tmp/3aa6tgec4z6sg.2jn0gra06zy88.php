<form role="form" method="post" action="./change-users">
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
  <br><input id="change-button" name="change-button" type="submit" value="Make Admin">
</form>