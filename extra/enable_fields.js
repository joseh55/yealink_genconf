function enableDisableTextFields() {
    cb1 = document.getElementById('vlan_en').checked;
    cb2 = document.getElementById('pwadmin_en').checked;
  //document.getElementById('emailAddr').disabled = !(cb1 || cb2);
  //document.getElementById('emailConfirm').disabled = !(cb1 || cb2);
    document.getElementById('vlan').disabled = !cb1;
    document.getElementById('pwad').disabled = !cb2;
  //document.getElementById('size').disabled = !cb2;
  //document.getElementById('model').disabled = !cb2;
}