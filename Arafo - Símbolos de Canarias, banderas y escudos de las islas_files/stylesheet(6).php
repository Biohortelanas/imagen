/* Start of CMSMS style sheet 'simbc : tipos de archivo' */
/* external links will have "(external link)" text added, lets hide it */
a.filepdf span {
  position: absolute;
  left: -5000px;
  width: 4000px;
  title: Se abre un archivo .pdf en ventana nueva;
}

/* make some room for the image */
a.filepdf {
/* css shorthand rules, read: first top padding 0 then right padding 12px then bottom then right */
  padding: 0 16px 0 0;
}

/* MARCADOR ARCHIVOS PDF */
a.filepdf:link {
/* color: #18507C; */
/*  background: url(xtras/simbc/file_acrobat14e.gif) no-repeat 100% 0;*/
  background-position: right;
/*  font-size: x-small; */
  margin-bottom: 15px;
  background-image: url('../xtras/simbc/file_acrobat14e.gif');
  background-repeat: no-repeat;
/*  text-decoration: none; */
  line-height: 18px;
}

a.filepdf:visited {
/*  color: #18507C; */ /* a different color can be used for visited external links */
  background: url(xtras/simbc/file_acrobat14e.gif) no-repeat 100% 0; 
}

a.filepdf:hover {
/*  color: #18507C;*/
  background: url(xtras/simbc/file_acrobat14e.gif) no-repeat 100% 0; 
/*  background-color: #C3D4DF; */
}
/* End of 'simbc : tipos de archivo' */

