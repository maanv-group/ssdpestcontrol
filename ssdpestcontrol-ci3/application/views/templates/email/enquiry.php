<div style="background-color:white; padding: 20px; font-family: Arial, Helvetica, sans-serif;">
	<table style="width: 600px; margin: 0 auto; text-align:left; border: 1px solid #cdcdcd;">
		<tr>
			<th style="padding: 8px 16px; font-weight: 600; ">Name</th>
			<th style="padding: 8px 16px; font-weight: 600; ">Email</th>
			<th style="padding: 8px 16px; font-weight: 600; ">Contact&nbsp;Number</th>
			<th style="padding: 8px 16px; font-weight: 600; ">Location</th>
			<th style="padding: 8px 16px; font-weight: 600; ">Service</th>
		</tr>
		<tr>
			<td style="padding: 8px 16px;" ><?= $email['name_enq'] ?> </td>
			<td style="padding: 8px 16px;"><?= $email['email_enq'] ?></td>
			<td style="padding: 8px 16px;"><?= $email['contact_enq'] ?></td>
			<td style="padding: 8px 16px;"><?= $email['city_enq'] ??= "NA" ?></td>
			<td style="padding: 8px 16px;"><?= $email['service-type'] ??= "NA" ?></td>
			<td style="padding: 8px 16px;"><?= $email['message'] ??= "NA" ?></td>
		</tr>
	</table>
</div>

