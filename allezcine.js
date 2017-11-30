// autopop-up script

  function popup(mylink, windowname) {
    if (!window.focus) return true;
    var href;
    if (typeof(mylink) == 'string') href = mylink;
    else href = mylink.href;
    window.open(href, windowname, 'width=400,height=150,dependent=yes,left=200,top=50,scrollbars=yes');
    return false;
  }
