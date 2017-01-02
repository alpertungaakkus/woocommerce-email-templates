
<table class="full full-table" bgcolor="{{appearance.backgroundColor.val}}" style="font-family: '{{appearance.baseFont.val}}', sans-serif;background-color: {{appearance.backgroundColor.val}}; width: 100%; -webkit-background-size: 100% auto; -moz-background-size: 100% auto; -o-background-size: 100% auto; background-size: cover; background-attachment: fixed; background-position: top center; background-repeat: no-repeat; " width="100%" background="{{appearance.backgroundImage.val}}" cellspacing='0' cellpadding='0' border='0'>
    <tbody>
        <tr>
            <td height='50' class="erase"></td>
        </tr>
        <tr>
            <td height='50'></td>
        </tr>
        <tr>
            <td>
                <!-- Header lvl1-->
                <table bgcolor="{{header.backgroundColor.val}}" class="full" width="600" style="width: 600px; margin: 0px auto; padding: 0px; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; background: {{header.backgroundColor.val}};letter-spacing: 0.7px; " cellspacing='0' cellpadding='0' border='0' align="center">
                    <tbody>
                        <tr>
                            <td colspan="4" width="600"></td>
                        </tr>
                        <tr>
                            <td height='20'></td>
                        </tr>
                        <tr>
                            <td width='40'></td>
                            <td align="left" class="full ">
                                <table width="100%;" >
                                    <tbody>
                                        <tr>
                                            <td height='5'></td>
                                        </tr>
                                        <tr>
                                            <td class="liquid-center" valign="center">
                                                <a href="#">
                                                    <img src='{{header.logo.val}}' alt='Logo' />
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height='10'></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td align="right" class="full liquid-center">
                                <a style="text-decoration: none; color: #ffffff; " href="http://monsart.net/emails/order-1/">HOME</a><a style="text-decoration: none; color: #ffffff; " href="http://monsart.net/emails/order-1/">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;SHIPING</a><a style="text-decoration: none; color: #ffffff; " href="http://monsart.net/emails/order-1/">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;CONTACT</a>
                            </td>
                            <td width='40'></td>
                        </tr>
                        <tr>
                            <td height='20'></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Header lvl2-->
                <?php  do_action('ma_email_header', $this->_emailType); ?>

                <!-- Content -->
                <table bgcolor="#ffffff" class="full" width="600" style="width: 600px; margin: 0px auto; padding: 0px; font-family: 'Open Sans', sans-serif; background: #ffffff; border-radius: 0px 0px 4px 4px;" cellspacing='0' cellpadding='0' border='0' align="center">
                    <tbody>
                        <tr>
                            <td colspan="4" width="600"></td>
                        </tr>
                        <tr>
                            <td width='20' rowspan='100'></td>
                            <td>
                                <table class="full" width="520" cellspacing='0' cellpadding='0' border='0'>
                                    <tbody>
                                        <!-- Left: -->
                                    <td valign="top" width="220" class="full">
                                        <!-- Left: Row 1 -->
                                        <table class="full" bgcolor="#f3f3f3" style="background: #f3f3f3; " width="240" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='30' colspan='3' bgcolor='#ffffff' style='background: #ffffff;'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" width="240"></td>
                                                </tr>
                                                <tr>
                                                    <td height='10' colspan='3'></td>
                                                </tr>
                                                <tr>
                                                    <td width='20' rowspan='3'></td>
                                                    <td style="color: #6f6f6f;font-size: 14px;font-family: '{{appearance.baseFont.val}}', sans-serif,'Open Sans'; ">
                                                        Order placed
                                                    </td>
                                                    <td width='20' rowspan='3'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='1'></td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #3a3a3a; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: 800; font-size: 18px; ">
                                                        January 01, 2017
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height='15' colspan='3'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Left: Row 2 -->
                                        <table class="full" bgcolor="#181818" style="background: #303030; " width="240" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='15' colspan='3' bgcolor='#ffffff' style='background: #ffffff;'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" width="240"></td>
                                                </tr>
                                                <tr>
                                                    <td height='10' colspan='3'></td>
                                                </tr>
                                                <tr>
                                                    <td width='20' rowspan='3'></td>
                                                    <td align="center" style="color: #ffffff;font-family: '{{appearance.baseFont.val}}', sans-serif;font-size: 14px; ">Order number</td>
                                                    <td width='20' rowspan='3'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='1'></td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="color: #ffffff; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; font-size: 14px; ">ORD935200001</td>
                                                </tr>
                                                <tr>
                                                    <td height='10' colspan='3'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Left: Row 3 -->
                                        <table class="full" bgcolor="#f3f3f3" style="background: #f3f3f3; " width="240" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='15' colspan='3' bgcolor='#ffffff' style='background: #ffffff;'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" width="240"></td>
                                                </tr>
                                                <tr>
                                                    <td height='10' colspan='3'></td>
                                                </tr>
                                                <tr>
                                                    <td width='20' rowspan='100'></td>
                                                    <td align="left" style="color: #363636; font-weight: bold; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;"><b>Recipient</b></td>
                                                    <td width='20' rowspan='100'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px;font-family: '{{header.headerFont.val}}',sans-serif; ">Jhon Do</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}',sans-serif; ">10 A. Streetname</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Example Here</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}',sans-serif; ">132-456-789</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}',sans-serif; ">USA</td>
                                                </tr>
                                                <tr>
                                                    <td height='25'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Left: Row 4 -->
                                        <table class="full" bgcolor="#f3f3f3" style="background: #f3f3f3; " width="240" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='15' colspan='3' bgcolor='#ffffff' style='background: #ffffff;'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" width="240"></td>
                                                </tr>
                                                <tr>
                                                    <td height='10' colspan='3'></td>
                                                </tr>
                                                <tr>
                                                    <td width='20' rowspan='100'></td>
                                                    <td align="left" style="color: #262626; font-weight: bold; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;"><b>Billed To:</b></td>
                                                    <td width='20' rowspan='100'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Jhon Do</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">10 A. Streetname</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Example Here</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">132-456-789</td>
                                                </tr>
                                                <tr>
                                                    <td height='5'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">USA</td>
                                                </tr>
                                                <tr>
                                                    <td height='25'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Left: Row 5 -->
                                        <table class="full" bgcolor="#f3f3f3" style="background: #f3f3f3; " width="240" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='15' colspan='4' bgcolor='#ffffff' style='background: #ffffff;'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" width="240"></td>
                                                </tr>
                                                <tr>
                                                    <td height='10' colspan='4'></td>
                                                </tr>
                                                <tr>
                                                    <td width='20' rowspan='100'></td>
                                                    <td width="100"></td>
                                                    <td width="100"></td>
                                                    <td width='20' rowspan='100'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}',sans-serif; ">Subtotal</td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold; font-family: '{{appearance.baseFont.val}}',sans-serif;">$189.15</td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Shiping</td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold; font-family: '{{appearance.baseFont.val}}',sans-serif;"><b style="color:#e66161;">FREE</b></td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Handling</td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold; font-family: '{{appearance.baseFont.val}}',sans-serif;">$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Delivery</td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold;font-family: '{{appearance.baseFont.val}}',sans-serif; ">$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}',sans-serif; ">Tax</td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold;font-family: '{{appearance.baseFont.val}}',sans-serif; ">$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='20' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td height="1" colspan="2" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='15' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;"><b style="color: #363636;">Total</b></td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold; font-family: '{{appearance.baseFont.val}}',sans-serif;">$288.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}',sans-serif;">Credits</td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold; font-family: '{{appearance.baseFont.val}}',sans-serif;">$10.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='20' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td height="1" colspan="2" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='15' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td height='5' colspan='2'></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color: #363636; font-size: 14px; "><b style="color: #363636;font-family: '{{appearance.baseFont.val}}',sans-serif;">Orded Total</b></td>
                                                    <td align="right" style="color: #3a3a3a; font-size: 14px; font-weight: bold; font-family: '{{appearance.baseFont.val}}',sans-serif;"><b>$278.00</b></td>
                                                </tr>
                                                <tr>
                                                    <td height='25' colspan='2'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <!-- Right: -->
                                    <td valign="top" width="300" class="full">
                                        <table class="full" width="300" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='30'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" width="300"></td>
                                                </tr>
                                                <tr>
                                                    <td width='40' rowspan='100' class="erase"></td>
                                                    <td valign="top" align="center" rowspan="100" width="80" class="erase">
                                                        <img src='http://monsart.net/emails/order-1/images/rolics.png' alt='rolics' />
                                                    </td>
                                                    <td width='20' rowspan='100' class="erase"></td>
                                                    <td colspan="1" width="160"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Raybann&nbsp;Sunglasses</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px;font-family: '{{appearance.baseFont.val}}', sans-serif;"><abbr title="Stock Keeping Unit">SKU</abbr>: 032821</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="1" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Some&nbsp;info:</td>
                                                </tr>
                                                <tr>
                                                    <td height='7'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #363636; font-size: 12px;font-family: '{{appearance.baseFont.val}}', sans-serif;line-height: 21px;">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td height='1'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="1" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Item&nbsp;Number:</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}', sans-serif; ">0182-17373</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td height='1'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="1" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='20'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">QTY</td>
                                                    <td colspan="1" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Subtotal</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif;">1</td>
                                                    <td colspan="1" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif;">$199.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="full" width="300" cellspacing='0' cellpadding='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='30'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" width="300"></td>
                                                </tr>
                                                <tr>
                                                    <td width='40' rowspan='100' class="erase"></td>
                                                    <td valign="top" align="center" rowspan="100" width="80" class="erase">
                                                        <img src='http://monsart.net/emails/order-1/images/phones.png' alt='phones' />
                                                    </td>
                                                    <td width='20' rowspan='100' class="erase"></td>
                                                    <td colspan="1" width="160"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Earrings Silver TE.1</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px;font-family: '{{appearance.baseFont.val}}', sans-serif;"><abbr title="Stock Keeping Unit">SKU</abbr>: 032821</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="1" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Some&nbsp;info:</td>
                                                </tr>
                                                <tr>
                                                    <td height='7'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #363636; font-size: 12px;font-family: '{{appearance.baseFont.val}}', sans-serif;line-height: 21px;">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td height='1'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="1" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Item&nbsp;Number:</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="color: #363636; font-size: 14px;font-family: '{{appearance.baseFont.val}}', sans-serif; ">0182-17373</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td height='1'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="1" bgcolor="#dfdfdf" style="background: #dfdfdf; "></td>
                                                </tr>
                                                <tr>
                                                    <td height='20'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">QTY</td>
                                                    <td colspan="1" style="color: #262626; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif; font-weight: bold; ">Subtotal</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif;">1</td>
                                                    <td colspan="1" style="color: #363636; font-size: 14px; font-family: '{{appearance.baseFont.val}}', sans-serif;">$199.00</td>
                                                </tr>
                                                <tr>
                                                    <td height='10'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                    </tbody>
                </table>
            </td>
            <td width='20' rowspan='100'></td>
        </tr>
        <tr>
            <td height='40'></td>
        </tr>
        <tr>
            <td style="color: #6f6f6f; font-style: italic; font-size: 14px;font-family: '{{appearance.baseFont.val}}',sans-serif; letter-spacing: 1px;line-height: 22px;font-weight: 400;">
                <?php if ($this->_preview) { ?>
                    <div ng-bind-html="body.orderBottomText.val | trusted"></div>
                <?php } else { ?>
                    {{body.orderBottomText.val}}
                <?php } ?>

            </td>
        </tr>
        <tr>
            <td height='50'></td>
        </tr>
    </tbody>
</table>
<!-- Footer -->
<table class="full" width="600" style="width: 600px; margin: 0px auto; padding: 0px; font-family: 'Open Sans', sans-serif; " cellspacing='0' cellpadding='0' border='0' align="center">
    <tbody>
        <tr>
            <td colspan="2" width="600"></td>
        </tr>
        <tr>
            <td height='20'></td>
        </tr>
        <tr>
            <td align="left" class="full liquid-center" style="color: #ffffff;font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px;">

                <?php if ($this->_preview) { ?>
                    <div ng-bind-html="footer.copyright.val | trusted"></div>
                <?php } else { ?>
                    {{footer.copyright.val}}
                <?php } ?>
            </td>
            <td align="right" class="full liquid-center">
                <a style="text-decoration: none; color: #d63c3c; font-weight: bold; font-family: Helvetica, Arial, sans-serif, 'Open Sans';" href="http://monsart.net/emails/order-1/">Unsubscribe</a>
            </td>
        </tr>
        <tr>
            <td height='40'></td>
        </tr>
    </tbody>
</table>
</td>
        </tr>
    </tbody>
</table>