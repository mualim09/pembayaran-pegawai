<html>
   <!-- License:  LGPL 2.1 or QZ INDUSTRIES SOURCE CODE LICENSE -->
   <head><title>QZ Print Plugin</title>    
   <script type="text/javascript">
      var qz;   // Our main applet
      function findPrinter() {
         
         if (qz != null) {
            // Searches for locally installed printer with "zebra" in the name
            qz.findPrinter("Zebra");
         }
         
         // *Note:  monitorFinding() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDoneFinding()" and handle your next steps there.
         monitorFinding();
      }

      function findPrinters() {
         
         if (qz != null) {
            // Searches for locally installed printer with "zebra" in the name
            qz.findPrinter("\\{dummy printer name for listing\\}");
         }

         monitorFinding2();
      }

      function print() {
         if (qz != null) {
            // Searches for default printer
            qz.findPrinter();
         }
         if (qz != null) {
            // Send characters/raw commands to qz using "append"
            // This example is for EPL.  Please adapt to your printer language
            // Hint:  Carriage Return = \r, New Line = \n, Escape Double Quotes= \"
			//60 enter            
/*qz.Append("   PT. PELINDO MARINE SERVICE                           REPORT ID.    : KBB_BKT_JKK_ENTRY.PR\n"); 
qz.Append("   ------------------------                             TGL.PROSES    : 15-05-2013\n"); 
qz.Append("                                                        HALAMAN       : 1\n"); 
qz.Append("                             BUKTI PENGELUARAN KAS - BANK\n"); 
qz.Append("                            =============================\n"); 
qz.Append("   NO SIUK  : 001324/JKK/2013                                         TANGGAL  : 15-05-2013\n"); 
qz.Append(" |==========================================================================================   |\n"); 
qz.Append(" | 1. Pemegang Kas Harap membayarkan uang sebesar        :Rp. 37,609,500                       |\n"); 
qz.Append("   2. Terbilang        : TIGA PULUH TUJUH JUTA ENAM RATUS SEMBILAN RIBU LIMA RATUS  \n"); 
qz.Append("                         RUPIAH\n"); 
qz.Append(" | 3. Kepada           : CV. CIPTA ANUGRAH ABADI                                               |\n"); 
qz.Append(" | 4. Alamat           : BUKIT PALMA C7 NO. 19 BABAT JERAWAT, PAKAL                            |\n"); 
qz.Append("   5. Uraian           : PEMBYR PEK. PENGADAAN BARANG DAN PERLENGKAPAN UTK BEBERAPA \n"); 
qz.Append("                         KAPAL\n"); 
qz.Append(" | 6. Bukti Pendukung  : ND.1031/LOG/V-2013,DLL                        Tanggal, 15-05-2013     |\n"); 
qz.Append(" |------------------------------------------------------------------------------------------   |\n"); 
qz.Append(" |                                   KODE DAN NAMA REKENING                                    |\n"); 
qz.Append("  ------------------------------------------------------------------------------------------\n"); 
qz.Append("   NO. MUTASI JURNAL                                                 DEBET               KREDIT\n"); 
qz.Append("   001 802.11.00   00052   802.05.00              Rp                385,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA V (SRP)  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   002 802.11.00   00061   802.05.00              Rp              1,650,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANOMAN II (KONVENSIONAL)  Beban OL \n"); 
qz.Append("       Pelayananan Sarana Bantu Pelayanan Pemanduan \n"); 
qz.Append("       (qzPP)\n"); 
qz.Append("   003 802.11.00   00070   802.05.00              Rp              2,530,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MP.III-04  Beban OL Pelayananan Sarana Bantu \n"); 
qz.Append("       Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   004 802.11.00   00099   802.05.00              Rp              1,980,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANOMAN I  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   005 802.11.00   00099   802.05.00              Rp                550,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANOMAN I  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   006 802.11.00   00052   802.05.00              Rp              1,650,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA V (SRP)  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   007 802.11.00   00076   802.02.00              Rp              4,530,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANGGADA X (KONVENSIONAL)  Beban OL Jasa \n"); 
qz.Append("       Penundaan\n"); 
qz.Append("   008 112.01.00   00000   000.00.00              Rp                453,000\n"); 
qz.Append("       PPN Masukan PPN Masukan Yang Dapat \n"); 
qz.Append("       Dikreditkan  PT. PELINDO MARINE SERVICE  \n"); 
qz.Append("       TIDAK TERDEFINISI\n"); 
qz.Append("   009 802.11.00   00286   802.05.00              Rp                506,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA 324  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   010 802.11.00   00049   802.05.00              Rp                715,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MPI.S-046  Beban OL Pelayananan Sarana Bantu \n"); 
qz.Append("       Pelayanan Pemanduan (qzPP)\n"); 
  qz.append("\f");
qz.Append("   011 802.11.00   00286   802.05.00              Rp              1,320,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA 324  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   012 802.11.00   00051   807.09.00              Rp              3,130,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KM. ARTAMA III  Beban Oprs Langsung Jasa \n"); 
qz.Append("       Linnya / Artama\n"); 
qz.Append("   013 112.01.00   00000   000.00.00              Rp                313,000\n"); 
qz.Append("       PPN Masukan PPN Masukan Yang Dapat \n"); 
qz.Append("       Dikreditkan  PT. PELINDO MARINE SERVICE  \n"); 
qz.Append("       TIDAK TERDEFINISI\n"); 
qz.Append("   014 803.02.00   00372   802.05.00              Rp              1,350,000\n"); 
qz.Append("       Beban Pemeliharaan Beban Pemeliharaan Kapal  \n"); 
qz.Append("       KT. BIMA 333  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   015 802.11.00   00098   802.05.00              Rp              6,367,500\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA IV  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   016 802.11.00   00052   802.05.00              Rp                726,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA V (SRP)  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   017 802.11.00   00210   802.05.00              Rp                 93,500\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MP. ANTASENA 315  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   018 802.11.00   00046   802.05.00              Rp              1,407,500\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA VI (SRP)  Beban OL Pelayananan \n"); 
qz.Append("       Sarana Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   019 802.11.00   00069   802.05.00              Rp              7,953,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MP.III-02  Beban OL Pelayananan Sarana Bantu \n"); 
qz.Append("       Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   020 101.05.00   00000   000.00.00              Rp                                 37,609,500\n"); 
qz.Append("       Kas-Bank Bank Mandiri  PT. PELINDO MARINE \n"); 
qz.Append("       SERVICE  TIDAK TERDEFINISI\n"); 
  qz.append("\f");
qz.Append(" |                                                                                             |\n"); 
qz.Append(" |                           JUMLAH MUTASI  :     Rp            37,609,500           37,609,500|\n"); 
qz.Append(" |------------------------------------------------------------------------------------------   |\n"); 
qz.Append(" |                   TELAH DIPERIKSA           |                  SURABAYA, 15-05-2013         |\n"); 
qz.Append(" |----------------------------------||---------|                                               |\n"); 
qz.Append(" |     PEJABAT         ||  PARAF    | TANGGAL  |                     DIREKTUR UTAMA            |\n"); 
qz.Append(" |---------------------||-----------||---------|                                               |\n"); 
qz.Append(" |                     ||           |          |                                               |\n"); 
qz.Append(" | STAFF VALIDASI      ||           |          |                                               |\n"); 
qz.Append(" |---------------------||-----------||---------|                                               |\n"); 
qz.Append(" | SPV AKT MAN         ||           |          |                  MOCH. CHAIROEL ANWAR         |\n"); 
qz.Append(" |                     ||           |          |               --------------------------      |\n"); 
qz.Append(" |---------------------|---------------------------------------Uang Telah Diterima Oleh :---   |\n"); 
qz.Append(" | ASMAN AKUNTANSI                                                                             |\n"); 
qz.Append(" |                                                                                             |\n"); 
qz.Append(" |---------------------------------------------                                                |\n"); 
qz.Append(" | ASMAN AKUNTANSI                                                                             |\n"); 
qz.Append(" |                                                            ---------Nama Terang--------     |\n"); 
qz.Append(" |------------------------------------------------------------------------------------------   |\n"); 
qz.Append("                                       K E T E R A N G A N\n"); 
qz.Append("  ------------------------------------------------------------------------------------------\n"); 
qz.Append("   a. Nomor Posting     :                                    c. Paraf Petugas Posting\n"); 
qz.Append("                                                                -------------------\n"); 
qz.Append("   b. Tanggal Posting   :\n"); 
qz.Append("  ==========================================================================================\n");*/
		
            //qz.appendImage(getPath() + "img/image_sample_bw.png", "EPL", 150, 300);
            //while (!qz.isDoneAppending()) {} //wait for image to download to java
          		var isiValue= "asdsd";
			qz.Append(isiValue);
			  qz.append("\f");
			
			//qz.setPaperSize("8.5in", "11.0in");  // US Letter
			
			//HashPrintRequestAttributeSet attr = new HashPrintRequestAttributeSet();             
            //attr.add(new MediaPrintableArea(0f, 0f, getWidth()/72f, getHeight()/72f, MediaPrintableArea.INCH));
		
             qz.setPaperSize("9.5in", "11.0in");  // US Letter
             //qz.setPaperSize("210mm", "297mm");  // A4
             qz.setAutoSize(true);
			 //qz.setDocumentsPerSpool("10");
            qz.print(); // send commands to printer
	 }
	 
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
	 monitorPrinting();
         
         /**
           *  PHP PRINTING:
           *  // Uses the php `"echo"` function in conjunction with qz-print `"append"` function
           *  // This assumes you have already assigned a value to `"$commands"` with php
           *  qz.append(<?php echo $commands; ?>);
           */
           
         /**
           *  SPECIAL ASCII ENCODING
           *  //qz.setEncoding("UTF-8");
           *  qz.setEncoding("Cp1252"); 
           *  qz.append("\xDA");
           *  qz.append(String.fromCharCode(218));
           *  qz.append(chr(218));
           */
         
      }
      
      function printESCPImage() {
        if (qz != null) {
            // Append a black & white image.  If there are non b&w pixels, they'll
			// be converted to black or white based on a general lumen calculation.
			// In the case of "ESCP", an optional 3rd parameter "dotDensity" can be
			// provided.  This can be either an integer value (32, 33, 39) or 
			// a text value of "single", "double", "triple".  Triply dense makes
			// the image print smaller, but can improve the image quality for 
			// devices that support it.  Default value is "single" (32).
			// qz.appendImage(getPath() + "img/image_sample_bw.png", "ESCP", 32);
            qz.appendImage(getPath() + "img/image_sample_bw.png", "ESCP", "single");
            while (!qz.isDoneAppending()) {
                // Note, enless while loops are bad practice.
                // Create a JavaScript function called "jzebraDoneAppending()"
                // instead and handle your next steps there.
            }
            
            // Cut the receipt
            qz.appendHex("x1Dx56x41");
            
            // Send characters/raw commands to printer
            qz.print();
        }
		
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
         monitorPrinting();
      }
      
      function printZPLImage() {
         
         if (qz != null) {
            // Sample text
            qz.append("^XA\n");
            qz.append("^FO50,50^ADN,36,20^FDPRINTED USING QZ PRINT PLUGIN " + qz.getVersion() + "\n"); 
           
            // A second (and sometimes third an fourth) parameter MUST be 
            // specified to "appendImage()", for qz-print to use raw image 
            // printing.  If this is not supplied, qz-print will send PostScript
            // data to your raw printer!  This is bad!
            
            qz.appendImage(getPath() + "img/image_sample_bw.png", "ZPLII");
            while (!qz.isDoneAppending()) {
              // Note, enless while loops are bad practice.
              // Create a JavaScript function called "jzebraDoneAppending()"
              // instead and handle your next steps there.
            }
              
            // Finish printing
            qz.append("^FS\n");  
            qz.append("^XZ\n");  
            
            // Send characters/raw commands to printer
            qz.print();
         }
		 
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
	     monitorPrinting();
      }


      function print64() {
         
         if (qz != null) {
            // Use qz-print's `"append64"` function. This will automatically convert provided
            // base64 encoded text into ascii/bytes, etc.
            qz.append64("QTU5MCwxNjAwLDIsMywxLDEsTiwialplYnJhIHNhbXBsZS5odG1sIgpBNTkwLDE1NzAsMiwzLDEsMSxOLCJUZXN0aW5nIHRoZSBwcmludDY0KCkgZnVuY3Rpb24iClAxCg==");
            
            // Send characters/raw commands to printer
            qz.print();
         }
         
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
         monitorPrinting();
      }
      
      function printPages() {
         
         if (qz != null) { 
            // Mark the end of a label, in this case  P1 plus a newline character
            // qz-print knows to look for this and treat this as the end of a "page"
            // for better control of larger spooled jobs (i.e. 50+ labels)
            qz.setEndOfDocument("P1,1\r\n");
            
            // The amount of labels to spool to the printer at a time. When
            // qz-print counts this many `EndOfDocument`'s, a new print job will 
            // automatically be spooled to the printer and counting will start
            // over.
            qz.setDocumentsPerSpool("2");
            
            qz.appendFile(getPath() + "misc/epl_multiples.txt");
            
            // Send characters/raw commands to printer
            qz.print();

         }
         
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
         monitorPrinting();
      }

      function printXML() {
         
         if (qz != null) {
            // Appends the contents of an XML file from a SOAP response, etc.
            // a valid relative URL or a valid complete URL is required for the XML
            // file.  The second parameter must be a valid XML tag/node containing
            // base64 encoded data, i.e. <node_1>aGVsbG8gd29ybGQ=</node_1>
            // Example:
            //     qz.appendXML("http://yoursite.com/zpl.xml", "node_1");
            //     qz.appendXML("http://justtesting.biz/jZebra/dist/epl.xml", "v7:Image");
            qz.appendXML(getPath() + "misc/zpl_sample.xml", "v7:Image");
            
            // Send characters/raw commands to printer
            //qz.print(); // Can't do this yet because of timing issues with XML
         }
         
         // Monitor the append status of the xml file, prints when appending if finished
         // *Note:  monitorAppending() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDoneAppending()" and handle your next steps there.
         monitorAppending();
      }
      
      function printHex() {
      	 
         if (qz != null) {
            // *NOTE* New syntax with version 1.5.4, no backslashes needed, which should fix \x00 JavaScript bug.
            // Can be in format "1B00" or "x1Bx00"
            qz.appendHex("4e0d0a713630390d0a513230332c32360d0a42352c32362c302c31412c332c372c3135322c422c2231323334220d0a413331302c32362c302c332c312c312c4e2c22534b55203030303030204d46472030303030220d0a413331302c35362c302c332c312c312c4e2c224a5a45425241205052494e54204150504c4554220d0a413331302c38362c302c332c312c312c4e2c2254455354205052494e54205355434345535346554c220d0a413331302c3131362c302c332c312c312c4e2c2246524f4d2053414d504c452e48544d4c220d0a413331302c3134362c302c332c312c312c4e2c225052494e5448455828292046554e43220d0a50312c310d0a");
            
            // Send characters/raw commands to printer
            qz.print();

            
         }
         
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
         monitorPrinting();
         
         /**
           *  CHR/ASCII PRINTING:
           *  // Appends CHR(27) + CHR(29) using `"fromCharCode"` function
           *  // CHR(27) is commonly called the "ESCAPE" character
           *  qz.append(String.fromCharCode(27) + String.fromCharCode(29));
           */
      }
      
      
      function printFile(file) {
      	    
      	    if (qz != null) {
	       // Using qz-print's "appendFile()" function, a file containg your raw EPL/ZPL
	       // can be sent directly to the printer
	       // Example: 
	       //     qz.appendFile("http://yoursite/zpllabel.txt"); // ...etc
	       qz.appendFile(getPath() + "misc/" + file);
	       qz.print();
	    }
	    
            // *Note:  monitorPrinting() still works but is too complicated and
            // outdated.  Instead create a JavaScript  function called 
            // "jzebraDonePrinting()" and handle your next steps there.
	    monitorPrinting();
      }


      function printImage(scaleImage) {
            
      	    if (qz != null) {
	       // Using qz-print's "appendImage()" function, a png, jpeg file
	       // can be sent directly to the printer supressing the print dialog
	       // Example:
	       //     qz.appendImage("http://yoursite/logo1.png"); // ...etc

               // Sample only: Searches for locally installed printer with "pdf" in the name
               // Can't use Zebra, because this function needs a PostScript capable printer
               qz.findPrinter("\\{dummy printer name for listing\\}");
               while (!qz.isDoneFinding()) {
                    // Note, enless while loops are bad practice.
                    // Create a JavaScript function called "jzebraDoneFinding()"
                    // instead and handle your next steps there.
               }

               // Sample only: If a PDF printer isn't installed, try the Microsoft XPS Document
               // Writer.  Replace this with your printer name.
               var printers = qz.getPrinters().split(",");
               for (i in printers) {
		    if (printers[i].indexOf("Microsoft XPS") != -1 || 
			printers[i].indexOf("PDF") != -1) {
			   qz.setPrinter(i);      
		    }	       
               }
               
               // No suitable printer found, exit
               if (qz.getPrinter() == null) {
                   alert("Could not find a suitable printer for printing an image.");
                   return;
               }

               // Optional, set up custom page size.  These only work for PostScript printing.
               // setPaperSize() must be called before setAutoSize(), setOrientation(), etc.
               if (scaleImage) {
                    qz.setPaperSize("8.5in", "11.0in");  // US Letter
               	    //qz.setPaperSize("210mm", "297mm");  // A4
                    qz.setAutoSize(true);
                    //qz.setOrientation("landscape");
                    //qz.setOrientation("reverse-landscape");
                    //qz.setCopies(3); //Does not seem to do anything
               }

               // Append our image (only one image can be appended per print)
	       qz.appendImage(getPath() + "img/image_sample.png");
	    }

            // Very important for images, uses printPS() insetad of print()
            // *Note:  monitorAppending2() still works but is too complicated and
            // outdated.  Instead create a JavaScript  function called 
            // "jzebraDoneAppending()" and handle your next steps there.
	    monitorAppending2();
      }
      
	   function printPDFFile() {
		if (notReady()) { return; }
		// Append our pdf (only one pdf can be appended per print)
		qz.appendPDF(getPath() + "misc/pdf_sample.pdf");
		
		// Automatically gets called when "qz.appendPDF()" is finished.
		window['qzDoneAppending'] = function() {
			// Tell the applet to print PostScript.
			qz.printPS();
			
			// Remove reference to this function
			window['qzDoneAppending'] = null;
		};
		
		/*if (notReady()) { return; }
		// Append our pdf (only one pdf can be appended per print)
		qz.appendPDF(getPath() + "misc/sample.pdf");
		
		//qz.setCopies(3);
		qz.setCopies(parseInt(document.getElementById("copies").value));
		
		// Automatically gets called when "qz.appendPDF()" is finished.
		window['qzDoneAppending'] = function() {
			// Tell the applet to print PostScript.
			qz.printPS();
			
			// Remove reference to this function
			window['qzDoneAppending'] = null;
		};*/
	}
	  
      function printPDF() {
          
      	    if (qz != null) {
               qz.findPrinter("\\{dummy printer name for listing\\}");
               while (!qz.isDoneFinding()) {
                    // Note, enless while loops are bad practice.
                    // Create a JavaScript function called "jzebraDoneFinding()"
                    // instead and handle your next steps there.
               }

               // Sample only: If a PDF printer isn't installed, try the Microsoft XPS Document
               // Writer.  Replace this with your printer name.
               var printers = qz.getPrinters().split(",");
               for (i in printers) {
		    if (printers[i].indexOf("Microsoft XPS") != -1 || 
			printers[i].indexOf("PDF") != -1) {
			   qz.setPrinter(i);      
		    }	       
               }
               
               // No suitable printer found, exit
               if (qz.getPrinter() == null) {
                   alert("Could not find a suitable printer for a PDF document");
                   return;
               }
               
               // Append our pdf (only one pdf can be appended per print)
	       qz.appendPDF(getPath() + "misc/sample.pdf");
		   qz.printPS();
	    }

            // Very important for PDF, uses printPS() instead of print()
            // *Note:  monitorAppending2() still works but is too complicated and
            // outdated.  Instead create a JavaScript  function called 
            // "jzebraDoneAppending()" and handle your next steps there.
	    monitorAppending2();
      }
      
      // Gets the current url's path, such as http://site.com/example/dist/
      function getPath() {
          var path = window.location.href;
          return path.substring(0, path.lastIndexOf("/")) + "/";
      }
      
 
      function printHTML() {
            
      	    if (qz != null) {
               qz.findPrinter("\\{dummy printer name for listing\\}");
               while (!qz.isDoneFinding()) {
                   // Wait
               }

               // Sample only: If a PDF printer isn't installed, try the Microsoft XPS Document
               // Writer.  Replace this with your printer name.
               var printers = qz.getPrinters().split(",");
               for (i in printers) {
		    if (printers[i].indexOf("Microsoft XPS") != -1 || 
			printers[i].indexOf("PDF") != -1) {
			   qz.setPrinter(i);      
		    }	       
               }
               
               // No suitable printer found, exit
               if (qz.getPrinter() == null) {
                   alert("Could not find a suitable printer for an HTML document");
                   return;
               }
               
               // Preserve formatting for white spaces, etc.
               var colA = fixHTML('<h2>*  QZ Print Plugin HTML Printing  *</h2>');
               colA = colA + '<color=red>Version:</color> ' + qz.getVersion() + '<br />';
               colA = colA + '<color=red>Visit:</color> http://code.google.com/p/jzebra';
               
               // HTML image
               var colB = '<img src="' + getPath() + 'img/image_sample.png">';
                
               // Append our image (only one image can be appended per print)
	       qz.appendHTML('<html><table face="monospace" border="1px"><tr height="6cm">' + 
	       	   '<td valign="top">' + colA + '</td>' + 
                   '<td valign="top">' + colB + '</td>' + 
                   '</tr></table></html>');
	    }

            // Very important for html, uses printHTML() instead of print()
            // *Note:  monitorAppending3() still works but is too complicated and
            // outdated.  Instead create a JavaScript  function called 
            // "jzebraDoneAppending()" and handle your next steps there.
	    monitorAppending3();
      }
      
      // Fixes some html formatting for printing. Only use on text, not on tags!  Very important!
      //    1.  HTML ignores white spaces, this fixes that
      //    2.  The right quotation mark breaks PostScript print formatting
      //    3.  The hyphen/dash autoflows and breaks formatting  
      function fixHTML(html) { return html.replace(/ /g, "&nbsp;").replace(/'/g, "'").replace(/-/g,"&#8209;"); }
      
      function printToFile() {
         
         if (qz != null) {
            // Send characters/raw commands to qz using "append"
            // Hint:  Carriage Return = \r, New Line = \n, Escape Double Quotes= \"
            qz.append("A590,1600,2,3,1,1,N,\"QZ Print Plugin " + qz.getVersion() + " sample.html\"\n");
            qz.append("A590,1570,2,3,1,1,N,\"Testing the print() function\"\n");
            qz.append("P1\n");
            
            // Send characters/raw commands to file
            // Ex:  qz.printToFile("\\\\server\\printer");
            // Ex:  qz.printToFile("/home/user/test.txt");
            qz.printToFile("C:\\qz-print_test-print.txt");
	 }
	 
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
	 monitorPrinting();
      }
      
      function printToHost() {
         
         if (qz != null) {
            // Send characters/raw commands to applet using "append"
            // Hint:  Carriage Return = \r, New Line = \n, Escape Double Quotes= \"
          /*qz.Append("   PT. PELINDO MARINE SERVICE                           REPORT ID.    : KBB_BKT_JKK_ENTRY.PR\n"); 
qz.Append("   ------------------------                             TGL.PROSES    : 15-05-2013\n"); 
qz.Append("                                                        HALAMAN       : 1\n"); 
qz.Append("                             BUKTI PENGELUARAN KAS - BANK\n"); 
qz.Append("                            =============================\n"); 
qz.Append("   NO SIUK  : 001324/JKK/2013                                         TANGGAL  : 15-05-2013\n"); 
qz.Append(" |==========================================================================================   |\n"); 
qz.Append(" | 1. Pemegang Kas Harap membayarkan uang sebesar        :Rp. 37,609,500                       |\n"); 
qz.Append("   2. Terbilang        : TIGA PULUH TUJUH JUTA ENAM RATUS SEMBILAN RIBU LIMA RATUS  \n"); 
qz.Append("                         RUPIAH\n"); 
qz.Append(" | 3. Kepada           : CV. CIPTA ANUGRAH ABADI                                               |\n"); 
qz.Append(" | 4. Alamat           : BUKIT PALMA C7 NO. 19 BABAT JERAWAT, PAKAL                            |\n"); 
qz.Append("   5. Uraian           : PEMBYR PEK. PENGADAAN BARANG DAN PERLENGKAPAN UTK BEBERAPA \n"); 
qz.Append("                         KAPAL\n"); 
qz.Append(" | 6. Bukti Pendukung  : ND.1031/LOG/V-2013,DLL                        Tanggal, 15-05-2013     |\n"); 
qz.Append(" |------------------------------------------------------------------------------------------   |\n"); 
qz.Append(" |                                   KODE DAN NAMA REKENING                                    |\n"); 
qz.Append("  ------------------------------------------------------------------------------------------\n"); 
qz.Append("   NO. MUTASI JURNAL                                                 DEBET               KREDIT\n"); 
qz.Append("   001 802.11.00   00052   802.05.00              Rp                385,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA V (SRP)  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   002 802.11.00   00061   802.05.00              Rp              1,650,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANOMAN II (KONVENSIONAL)  Beban OL \n"); 
qz.Append("       Pelayananan Sarana Bantu Pelayanan Pemanduan \n"); 
qz.Append("       (qzPP)\n"); 
qz.Append("   003 802.11.00   00070   802.05.00              Rp              2,530,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MP.III-04  Beban OL Pelayananan Sarana Bantu \n"); 
qz.Append("       Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   004 802.11.00   00099   802.05.00              Rp              1,980,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANOMAN I  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   005 802.11.00   00099   802.05.00              Rp                550,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANOMAN I  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   006 802.11.00   00052   802.05.00              Rp              1,650,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA V (SRP)  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   007 802.11.00   00076   802.02.00              Rp              4,530,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. ANGGADA X (KONVENSIONAL)  Beban OL Jasa \n"); 
qz.Append("       Penundaan\n"); 
qz.Append("   008 112.01.00   00000   000.00.00              Rp                453,000\n"); 
qz.Append("       PPN Masukan PPN Masukan Yang Dapat \n"); 
qz.Append("       Dikreditkan  PT. PELINDO MARINE SERVICE  \n"); 
qz.Append("       TIDAK TERDEFINISI\n"); 
qz.Append("   009 802.11.00   00286   802.05.00              Rp                506,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA 324  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   010 802.11.00   00049   802.05.00              Rp                715,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MPI.S-046  Beban OL Pelayananan Sarana Bantu \n"); 
qz.Append("       Pelayanan Pemanduan (qzPP)\n"); 
  qz.append("\n\f");
qz.Append("   011 802.11.00   00286   802.05.00              Rp              1,320,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA 324  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   012 802.11.00   00051   807.09.00              Rp              3,130,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KM. ARTAMA III  Beban Oprs Langsung Jasa \n"); 
qz.Append("       Linnya / Artama\n"); 
qz.Append("   013 112.01.00   00000   000.00.00              Rp                313,000\n"); 
qz.Append("       PPN Masukan PPN Masukan Yang Dapat \n"); 
qz.Append("       Dikreditkan  PT. PELINDO MARINE SERVICE  \n"); 
qz.Append("       TIDAK TERDEFINISI\n"); 
qz.Append("   014 803.02.00   00372   802.05.00              Rp              1,350,000\n"); 
qz.Append("       Beban Pemeliharaan Beban Pemeliharaan Kapal  \n"); 
qz.Append("       KT. BIMA 333  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   015 802.11.00   00098   802.05.00              Rp              6,367,500\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA IV  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   016 802.11.00   00052   802.05.00              Rp                726,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA V (SRP)  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   017 802.11.00   00210   802.05.00              Rp                 93,500\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MP. ANTASENA 315  Beban OL Pelayananan Sarana \n"); 
qz.Append("       Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   018 802.11.00   00046   802.05.00              Rp              1,407,500\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       KT. BIMA VI (SRP)  Beban OL Pelayananan \n"); 
qz.Append("       Sarana Bantu Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   019 802.11.00   00069   802.05.00              Rp              7,953,000\n"); 
qz.Append("       Beban Bahan Beban Perlengkapan Operasional  \n"); 
qz.Append("       MP.III-02  Beban OL Pelayananan Sarana Bantu \n"); 
qz.Append("       Pelayanan Pemanduan (qzPP)\n"); 
qz.Append("   020 101.05.00   00000   000.00.00              Rp                                 37,609,500\n"); 
qz.Append("       Kas-Bank Bank Mandiri  PT. PELINDO MARINE \n"); 
qz.Append("       SERVICE  TIDAK TERDEFINISI\n"); 
  qz.append("\n\f");
qz.Append(" |                                                                                             |\n"); 
qz.Append(" |                           JUMLAH MUTASI  :     Rp            37,609,500           37,609,500|\n"); 
qz.Append(" |------------------------------------------------------------------------------------------   |\n"); 
qz.Append(" |                   TELAH DIPERIKSA           |                  SURABAYA, 15-05-2013         |\n"); 
qz.Append(" |----------------------------------||---------|                                               |\n"); 
qz.Append(" |     PEJABAT         ||  PARAF    | TANGGAL  |                     DIREKTUR UTAMA            |\n"); 
qz.Append(" |---------------------||-----------||---------|                                               |\n"); 
qz.Append(" |                     ||           |          |                                               |\n"); 
qz.Append(" | STAFF VALIDASI      ||           |          |                                               |\n"); 
qz.Append(" |---------------------||-----------||---------|                                               |\n"); 
qz.Append(" | SPV AKT MAN         ||           |          |                  MOCH. CHAIROEL ANWAR         |\n"); 
qz.Append(" |                     ||           |          |               --------------------------      |\n"); 
qz.Append(" |---------------------|---------------------------------------Uang Telah Diterima Oleh :---   |\n"); 
qz.Append(" | ASMAN AKUNTANSI                                                                             |\n"); 
qz.Append(" |                                                                                             |\n"); 
qz.Append(" |---------------------------------------------                                                |\n"); 
qz.Append(" | ASMAN AKUNTANSI                                                                             |\n"); 
qz.Append(" |                                                            ---------Nama Terang--------     |\n"); 
qz.Append(" |------------------------------------------------------------------------------------------   |\n"); 
qz.Append("                                       K E T E R A N G A N\n"); 
qz.Append("  ------------------------------------------------------------------------------------------\n"); 
qz.Append("   a. Nomor Posting     :                                    c. Paraf Petugas Posting\n"); 
qz.Append("                                                                -------------------\n"); 
qz.Append("   b. Tanggal Posting   :\n"); 
qz.Append("  ==========================================================================================\n");*/

            //qz.appendImage(getPath() + "img/image_sample_bw.png", "EPL", 150, 300);
            //while (!qz.isDoneAppending()) {} //wait for image to download to java
          var isiValue= "asdsd";
			qz.Append(isiValue);
			  qz.append("\n\f");
			
			//qz.setPaperSize("8.5in", "11.0in");  // US Letter
			
			//HashPrintRequestAttributeSet attr = new HashPrintRequestAttributeSet();             
            //attr.add(new MediaPrintableArea(0f, 0f, getWidth()/72f, getHeight()/72f, MediaPrintableArea.INCH));
		
             qz.setPaperSize("9.5in", "11.0in");  // US Letter
             //qz.setPaperSize("210mm", "297mm");  // A4
             qz.setAutoSize(true);
			 //qz.setDocumentsPerSpool("10");
            //qz.print(); // send commands to printer
            
            // qz.printToHost(String hostName, int portNumber);
            // qz.printToHost("192.168.254.254");   // Defaults to 9100
            qz.printToHost("192.168.88.165", 9100);
	 }
	 
         // *Note:  monitorPrinting() still works but is too complicated and
         // outdated.  Instead create a JavaScript  function called 
         // "jzebraDonePrinting()" and handle your next steps there.
	 monitorPrinting();
      }
      
      function chr(i) {
         return String.fromCharCode(i);
      }
      
      // *Note:  monitorPrinting() still works but is too complicated and
      // outdated.  Instead create a JavaScript  function called 
      // "jzebraDonePrinting()" and handle your next steps there.
      function monitorPrinting() {
	
	if (qz != null) {
	   if (!qz.isDonePrinting()) {
	      window.setTimeout('monitorPrinting()', 100);
	   } else {
	      var e = qz.getException();
	      alert(e == null ? "Printed Successfully" : "Exception occured: " + e.getLocalizedMessage());
              qz.clearException();
	   }
	} else {
            alert("Applet not loaded!");
        }
      }
      
      function monitorFinding() {
	
	if (qz != null) {
	   if (!qz.isDoneFinding()) {
	      window.setTimeout('monitorFinding()', 100);
	   } else {
	      var printer = qz.getPrinter();
              alert(printer == null ? "Printer not found" : "Printer \"" + printer + "\" found");
	   }
	} else {
            alert("Applet not loaded!");
        }
      }

      function monitorFinding2() {
	
	if (qz != null) {
	   if (!qz.isDoneFinding()) {
	      window.setTimeout('monitorFinding2()', 100);
	   } else {
              var printersCSV = qz.getPrinters();
              var printers = printersCSV.split(",");
              for (p in printers) {
                  alert(printers[p]);
              }
              
	   }
	} else {
            alert("Applet not loaded!");
        }
      }
      
      // *Note:  monitorAppending() still works but is too complicated and
      // outdated.  Instead create a JavaScript  function called 
      // "jzebraDoneAppending()" and handle your next steps there.
      function monitorAppending() {
	
	if (qz != null) {
	   if (!qz.isDoneAppending()) {
	      window.setTimeout('monitorAppending()', 100);
	   } else {
	      qz.print(); // Don't print until all of the data has been appended
              
              // *Note:  monitorPrinting() still works but is too complicated and
              // outdated.  Instead create a JavaScript  function called 
              // "jzebraDonePrinting()" and handle your next steps there.
              monitorPrinting();
	   }
	} else {
            alert("Applet not loaded!");
        }
      }

      // *Note:  monitorAppending2() still works but is too complicated and
      // outdated.  Instead create a JavaScript  function called 
      // "jzebraDoneAppending()" and handle your next steps there.
      function monitorAppending2() {
	
	if (qz != null) {
	   if (!qz.isDoneAppending()) {
	      window.setTimeout('monitorAppending2()', 100);
	   } else {
	      qz.printPS(); // Don't print until all of the image data has been appended
              
              // *Note:  monitorPrinting() still works but is too complicated and
              // outdated.  Instead create a JavaScript  function called 
              // "jzebraDonePrinting()" and handle your next steps there.
              monitorPrinting();
	   }
	} else {
            alert("Applet not loaded!");
        }
      }
      
      // *Note:  monitorAppending3() still works but is too complicated and
      // outdated.  Instead create a JavaScript  function called 
      // "jzebraDoneAppending()" and handle your next steps there.
      function monitorAppending3() {
	
	if (qz != null) {
	   if (!qz.isDoneAppending()) {
	      window.setTimeout('monitorAppending3()', 100);
	   } else {
	      qz.printHTML(); // Don't print until all of the image data has been appended
              
              
              // *Note:  monitorPrinting() still works but is too complicated and
              // outdated.  Instead create a JavaScript  function called 
              // "jzebraDonePrinting()" and handle your next steps there.
              monitorPrinting();
	   }
	} else {
            alert("Applet not loaded!");
        }
      }
      
      function useDefaultPrinter() {
         
         if (qz != null) {
            // Searches for default printer
            qz.findPrinter();
         }
         
         monitorFinding();
      }
      
      function jzebraReady() {
          // Change title to reflect version
          qz = document.getElementById('qz');
          var title = document.getElementById("title");
          if (qz != null) {
              title.innerHTML = title.innerHTML + " " + qz.getVersion();
              document.getElementById("content").style.background = "#F0F0F0";
          }
      }
      
      /**
       * By default, jZebra prevents multiple instances of the applet's main 
       * JavaScript listener thread to start up.  This can cause problems if
       * you have jZebra loaded on multiple pages at once. 
       * 
       * The downside to this is Internet Explorer has a tendency to initilize the
       * applet multiple times, so use this setting with care.
       */
      function allowMultiple() {
          
          if (qz != null) {
              var multiple = qz.getAllowMultipleInstances();
              qz.allowMultipleInstances(!multiple);
              alert('Allowing of multiple applet instances set to "' + !multiple + '"');
          }
      }
      
      function printPage() {
           $("#content").html2canvas({ 
                canvas: hidden_screenshot,
                onrendered: function() {printBase64Image($("canvas")[0].toDataURL('image/png'));}
           });
      }
      
      function printBase64Image(base64data) {
         
      	 if (qz != null) {
               qz.findPrinter("\\{dummy printer name for listing\\}");
               while (!qz.isDoneFinding()) {
                    // Note, endless while loops are bad practice.
               }

               var printers = qz.getPrinters().split(",");
               for (i in printers) {
		    if (printers[i].indexOf("Microsoft XPS") != -1 || 
			printers[i].indexOf("PDF") != -1) {
			   qz.setPrinter(i);      
		    }	       
               }
               
               // No suitable printer found, exit
               if (qz.getPrinter() == null) {
                   alert("Could not find a suitable printer for printing an image.");
                   return;
               }

               // Optional, set up custom page size.  These only work for PostScript printing.
               // setPaperSize() must be called before setAutoSize(), setOrientation(), etc.
               qz.setPaperSize("8.5in", "11.0in");  // US Letter
               qz.setAutoSize(true);
               qz.appendImage(base64data);
	    }

            // Very important for images, uses printPS() insetad of print()
            // *Note:  monitorAppending2() still works but is too complicated and
            // outdated.  Instead create a JavaScript  function called 
            // "jzebraDoneAppending()" and handle your next steps there.
	    monitorAppending2();
      }

      function logFeatures() {
          if (document.jzebra != null) {
              
              var logging = qz.getLogPostScriptFeatures();
              qz.setLogPostScriptFeatures(!logging);
              alert('Logging of PostScript printer capabilities to console set to "' + !logging + '"');
          }
      }
   
      function useAlternatePrinting() {
          
          if (qz != null) {
              var alternate = qz.isAlternatePrinting();
              qz.useAlternatePrinting(!alternate);
              alert('Alternate CUPS printing set to "' + !alternate + '"');
          }
      }
	  
	  function listSerialPorts() {
		
                if (qz != null) {
			qz.findPorts();
            while (!qz.isDoneFindingPorts()) {} // wait
			var ports = qz.getPorts().split(",");
			for (p in ports) {
				if (p == 0) {
					document.getElementById("port_name").value = ports[p];
				}
				alert(ports[p]);
			}
		}
	  }
	  
	  function openSerialPort() {
		
                if (qz != null) {
                    qz.openPort(document.getElementById("port_name").value);
		}
	  }
          
          function closeSerialPort() {
		
                if (qz != null) {
                    qz.closePort(document.getElementById("port_name").value);
		}
	  }
          
          // Automatically gets fired with the port is finished opening (even if it fails to open)
          function jzebraDoneOpeningPort(portName) {
              
              if (qz != null) {
                  var e = qz.getException();
                  if (e != null) {
                      alert("Could not open port [" + portName + "] \n\t" + e.getLocalizedMessage());
                      qz.clearException();
                  } else {
                      alert("Port [" + portName +  "] is open!");
                  }
              }
          }
          
          // Automatically gets fired with the port is finished closing (even if it fails to close)
          function jzebraDoneClosingPort(portName) {
              
              if (qz != null) {
                  var e = qz.getException();
                  if (e != null) {
                      alert("Could not close port [" + portName + "] \n\t" + e.getLocalizedMessage());
                      qz.clearException();
                  } else {
                      alert("Port [" + portName +  "] closed!");
                  }
              }
          }
          
          function sendSerialData() {
		
                if (qz != null) {
                    // Beggining and ending patterns that signify port has responded
                    // chr(2) and chr(13) surround data on a Mettler Toledo Scale
                    qz.setSerialBegin(chr(2));
                    qz.setSerialEnd(chr(13));
                    // Baud rate, data bits, stop bits, parity, flow control
                    // "9600", "7", "1", "even", "none" = Default for Mettler Toledo Scale
                    qz.setSerialProperties("9600", "7", "1", "even", "none");
                    // Send raw commands to the specified port.
                    // W = weight on Mettler Toledo Scale
                    qz.send(document.getElementById("port_name").value, "\nW\n");
                    
                    var e = qz.getException();
                    if (e != null) {
                        alert("Could not send data:\n\t" + e.getLocalizedMessage());
                        qz.clearException();  
                    }
		}
	  }
          
          // Automatically gets called when the serial port responds with data
          function jzebraSerialReturned(portName, data) {
            if (data == null || data == "") {       // Test for blank data
                alert("No data was returned.")
            } else if (data.indexOf("?") !=-1) {    // Test for bad data
                alert("Device not ready.  Please wait.")
            } else {                                // Display good data
                alert("Port [" + portName + "] returned data:\n\t" + data);
            }
          }

   </script>
   <script type="text/javascript" src="js/jquery-1.7.1.js"></script>
   <script type="text/javascript" src="js/html2canvas.js"></script>
   <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
   </head>
   <body id="content" bgcolor="#FFF380">
   <h1 id="title">QZ Print Plugin</h1><br />
   <table border="1px" cellpadding="5px" cellspacing="0px"><tr>
   
   <td valign="top"><h2>All Printers</h2>
   <input type=button onClick="findPrinter()" value="Detect Printer"><br />
   <input type=button onClick="findPrinters()" value="List All Printers"><br />
   <input type=button onClick="useDefaultPrinter()" value="Use Default Printer"><br /><br />
   <applet id="qz" name="QZ Print Plugin" code="qz.PrintApplet.class" width="55" height="55">
	  <param name="jnlp_href" value="qz-print_jnlp.jnlp">
          <param name="cache_option" value="plugin">
   </applet><br />
   
   </td><td valign="top"><h2>Raw Printers Only</h2>
   <a href="http://code.google.com/p/jzebra/wiki/WhatIsRawPrinting" target="new">What is Raw Printing?</a><br />
   <input type=button onClick="print()" value="Print" /><br />     
   <input type=button onClick="print64()" value="Print Base64" /><br />
   <input type=button onClick="printPages()" value="Print Spooling Every 2" /><br />
   <input type=button onClick="printXML()" value="Print XML" /><br />
   <input type=button onClick="printHex()" value="Print Hex" /><br />
   Print File:<br />
      <input type=button onClick="printFile('coba.txt')" value="ZPL" />&nbsp;
	  <input type=button onClick="printFile('fgl_sample.txt')" value="FGL" />&nbsp;
	  <input type=button onClick="printFile('epl_sample.txt')" value="EPL" /><br />    
   <input type=button onClick="printESCPImage()" value="Print ESC/POS Image" /><br />	  
   <input type=button onClick="printZPLImage()" value="Print ZPL Image" /><br />
   <input type=button onClick="printToFile()" value="Print To File" /><br />
   <input type=button onClick="printToHost()" value="Print To Host" /><br />
   <input type=button onClick="useAlternatePrinting()" value="Use Alternate Printing" /><br />
   
   </td><td valign="top"><h2>PostScript Printers Only</h2>
   <a href="http://code.google.com/p/jzebra/wiki/WhatIsPostScriptPrinting" target="new">What is PostScript Printing?</a><br />
   <input type=button onClick="printHTML()" value="Print HTML" /><br />
   <input type=button onClick="printPDFFile()" value="Print PDF" /><br />
   <input type=button onClick="printImage(false)" value="Print PostScript Image" /><br />
   <input type=button onClick="printImage(true)" value="Print Scaled PostScript Image" /><br />
   <input type=button onClick="printPage()" value="Print Current Page" /><br />
   <input type=button onClick="logFeatures()" value="Log Printer Features on Print" /><br />
   
   </td><td valign="top"><h2>Serial</h2>
   <input type=button id="list_ports" onClick="listSerialPorts()" value="List Serial Ports" /><br />
   <input type=text id="port_name" size="8" />
   <input type=button id="open_port"  onClick="openSerialPort()" value="Open Port" /><br />
   <input type=button id="send_data" onClick="sendSerialData()" value="Send Port Cmd" /><br />
   <input type=button id="close_port"  onClick="closeSerialPort()" value="Close Port" /><br />
   <hr /><h2>Misc</h2>
   <input type=button onClick="allowMultiple()" value="Allow Multiple Applets" /><br /></td></tr></table>
   </body><canvas id="hidden_screenshot" style="display:none;" />
</html>