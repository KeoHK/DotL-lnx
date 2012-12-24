<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#CCC">
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF" style="font-family: verdana, arial, helvetica; font-size: 10px;">
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="middle">
                      <div class="header">
							<div class="logo"><a href="http://www.dreamonthelake.it"><img src="http://lnx.dreamonthelake.it/profiles/commerce_kickstart/themes/commerce_kickstart_theme/logo.png" alt="Congresso Nazionale Rotaract - Dream on the Lake" title="Congresso Nazionale Rotaract - Dream on the Lake" /></a></div>
					  </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tr>
                    <th colspan="2"><?php print t('Order Summary'); ?></th>
                  </tr>
                  <tr>
                    <td colspan="2">

                      <table class="details" width="100%" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 1em;">
                        <tr>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Account No:'); ?></b> <?php print $info['order_uid']; ?><br/>
                            <br/>
                            <b><?php print t('Order Date:'); ?></b> <?php print date('j F, Y', $info['order_created']); ?><br/>
                            <br/>
                            <b><?php print t('Billing Address:'); ?></b><br />
                            <?php print isset($info['customer_billing']) ? $info['customer_billing'] : ''; ?><br />
                          </td>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Web Order No:'); ?></b> <?php print $info['order_number']; ?><br/>
                            <br/>
                            <b><?php print t('Email Address:'); ?></b> <?php print $info['order_mail']; ?><br/>
                            <br/>
                            <b><?php print t('Shipping Address:'); ?></b><br />
                            <?php print isset($info['customer_shipping']) ? $info['customer_shipping'] : ''; ?><br />
                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="products" width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tbody>
                    <tr>
                      <td class="line-items"><?php print isset($info['line_items']) ? $info['line_items'] : ''; ?></td>
                    </tr>
                    <tr>
                      <td><?php print isset($info['order_total']) ? $info['order_total'] : ''; ?></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr>
                    <td colspan="2" style="background: #EEE; color: #666; padding: 1em; font-size: 0.9em; line-height: 1.6em; border-top: #CCC 1px dotted; text-align: left;">
<div style="margin-top:10px;">
<h2>
		Informazioni per il pagamento</h2>
    <p>
        Caro Rotaractiano,<br />
        Abbiamo ricevuto la tua prenotazione. Di seguito trovi i dati ricapitolativi da
        te selezionati.
    </p>
    <p>
        Ti ricordiamo che hai 7 giorni* per inviare al seguente indirizzo mail: 
        <a href="mailto:treasurer@dreamonthelake.it">treasurer@dreamonthelake.it</a>&nbsp;
        una mail con allegata la copia dell’avvenuto bonifico dell’esatto importo sotto
        riportato.<br />
        Riceverai una mail di conferma una volta che il tuo ordine sarà stato processato e confermato dallo staff del Congresso Nazionale Rotaract
    </p>
<p>
        Ti ricordiamo di effettuare il bonifico bancario alle seguenti coordinate:
    </p>
<p>
        IBAN: IT49 K033 5901 6001 0000 0066 934
        <br />
        SWIFT: BCITITMX
        <br />
        INTESTARIO CONTO: 2040 Distretto Rotaract
        <br />
        CAUSALE: (tuo Nome e Cognome) - Pacchetto e Numero Persone
    </p>
    <p>
        &nbsp;trascorsa tale scadenza, la tua prenotazione sarà annullata.
    </p>
    <p>
        Saluti<br />
        Il Comitato Organizzatore del Congresso Nazionale Rotaract

    </p>
    <p>
        “Dream on the lake”

    </p>
</div>
<div style="margin-top:10px;">
<h2>
		Payment Information</h2>
    <p>
        Dear Rotaract member,<br />
        We have received your booking request. Hereby you will find all the details regarding
        your selections.
    </p>
    <p>
        We would like to inform you that you are required to send an email, within 7 days
        upon the receipt of this form, to the following email address: 
        <a href="mailto:treasurer@dreamonthelake.it">treasurer@dreamonthelake.it</a>&nbsp;
        containing an attached copy of the payment of the exact amount written below. <br />
        You're going to receive a final confirmation email once your order is processed and accepted by the Congresso Nazionale Rotaract staff
    </p>
<p>
        Remember to make the bank transfer at the following bank code:
    </p>
<p>
        IBAN: IT49 K033 5901 6001 0000 0066 934
        <br />
        SWIFT: BCITITMX
        <br />
        ACCOUNT OWNER: 2040 Distretto Rotaract
        <br />
        OBJECT OF PAYMENT: (your Name and Surname) - Booking Choice and People
    </p>
    <p>
        &nbsp;After the deadline, your reservation will be cancelled.
    </p>
    <p>
        Regards<br />
		See you in Como
    </p>
</div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
