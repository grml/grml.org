
BEGIN{
   print "<br><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"
   a=1;
}
(!/---------------/){

   if (a==1) bgcolor="#eeeeee"
   else bgcolor="#cccccc"

   a=1-a;
   print "<tr>"
   print "<td bgcolor=\""bgcolor"\"><font size=\"-2\" >" $1 "</font></td>"
   print "<td bgcolor=\""bgcolor"\"><font size=\"-2\" >" $2 "</font></td>"

   print "</tr>"
}
END{
   print "</table>"
}

