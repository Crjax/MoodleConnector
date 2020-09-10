using Microsoft.AspNetCore.Mvc;

namespace MoodleExternalApi.Controllers
{
    /// <summary>
    ///     Controller to report on the health of the API.
    /// </summary>
    /// <remarks>
    ///     This is used to ensure the Azure "Always On" keep-alive does not create a 404 failed request.
    /// </remarks>
    [Route("")]
    public class SiteStatusController : Controller
    {
        /// <summary>
        ///     Returns a 200 status code if the service is running normally.
        /// </summary>
        /// <returns></returns>
        [HttpGet]
        public IActionResult Index()
        {

            return Ok("Service is running normally.");
        }

        /// <summary>
        ///     Returns a list of methods that are supported for this resource.
        /// </summary>
        /// <returns></returns>
        [HttpOptions]
        public IActionResult GetOptions()
        {
            Response.Headers.Add("Allow", "GET,OPTIONS");

            return Ok();
        }
    }
}
