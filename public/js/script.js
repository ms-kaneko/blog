  //削除ボタン
  $(document).on('click', '.js-index-delete-button', function () {
    if (confirm('削除しますか？')) {
      $(this).parents('form').submit();
    }
  });