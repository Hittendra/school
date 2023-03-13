 <h3> HTTP Status Codes </h3>
      <ul> 
          <li> 200 OK </li>
          <li> 404 Not Found</li>
          <li> 302 Found/Moved also known as "redirect" </li>
     </ul>


     <h3>HTTP Location Header</h3>
    <ul>
          <li>If our application has not yet sent any data, it can send a special header as part of the HTTP Response.</li>
          <li>The redirect header includes a URL that the browser is supposed to forward itself to.</li>
          <li>It was originally used for web sites that moved from one URL to another.</li>
     </ul>

     <h3>POST / Refresh</h3>
     <ul>
          <li>Once we do a POST, if we do refresh, the browser will resend the POST data a second time.</li>
          <li>The user gets a popup that tries to explain what is about to happen.</li>
     </ul>

     <h3>No Double Posts</h3>
     <ul> 
          <li>Typically POST requests are adding or modifying data whilst GET requests view data.</li>
          <li>It may be dangerous to do the same POST twice (say withdrawing funds from a bank account).</li>
          <li>So the browser insists on asking the user (out of your control).</li>
          <li>Kind of an ugly UX/bad usability.</li>
     </ul>

     <h3>POST Redirect Rule</h3>
     <ul>
          <li>The simple rule for pages intended for a browser is to never generate a page with HTML content when the appl receives POST data.</li>
          <li>Must redirect somewhere - even to the same script - forcing the browser to make a GET after the POST.</li>
     </ul>