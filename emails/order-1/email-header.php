
<table bgcolor="#eaeaea" class="full" width="600" style="width: 600px; margin: 0px auto; padding: 0px; font-family: '{{appearance.baseFont.val}}', sans-serif; background: #f3f3f3; " cellspacing='0' cellpadding='0' border='0' align="center">
    <tbody>
        <tr>
            <td colspan="4" width="600"></td>
        </tr>
        <tr>
            <td height='25'></td>
        </tr>
        <tr>
            <td width='20' rowspan='3'></td>
            <td align="left" style="font-family: '{{header.headerFont.val}}', sans-serif; font-weight: 800; color: #303030; font-size: 22px; ">{{body.orderHeadingTitle.%s%.val}}</td>
            <td width='40' rowspan='3'></td>
        </tr>
        <tr>
            <td height='10'></td>
        </tr>
        <tr>
            <td style="color: #6f6f6f; font-size: 16px;font-family: '{{appearance.baseFont.val}}', sans-serif; font-style: italic; font-weight: 400;letter-spacing: 0.5px;">


                <?php if ($this->_preview) { ?>
                    <div ng-bind-html="body.orderHeadingText.%s%.val | trusted"></div>
                <?php } else { ?>
                    {{body.orderHeadingText.%s%.val}}
                <?php } ?>    

            </td>
        </tr>
        <tr>
            <td height='30'></td>
        </tr>
    </tbody>
</table>